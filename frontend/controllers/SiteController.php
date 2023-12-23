<?php

/*
 * Team：互联网团队
 * Coding By：所有人
 * 前台主控制器
 */

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;

use frontend\models\ContactForm;

use common\models\LoginForm;
use frontend\models\SignupForm;
use frontend\models\ModifyForm;

use common\models\News;

use common\models\Comment;
use frontend\models\CommentForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }





    /**
     *  重置信息的动作，用于修改当前的密码或者用户名
     */
    public function actionModify()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new ModifyForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->setMyUser()) {
                $model->setInfo();
                Yii::$app->user->logout();
                return $this->redirect(array('/site/index',
                    'message' => "信息修改成功，请重新登录。"
                ));
            } else {
                return $this->render('modify', [
                    'model' => $model,
                    'message' => "用户名或密码错误"
                ]);
            }
        }
        return $this->render('modify', [
            'model' => $model,
        ]);
    }


    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Displays news page.
     *
     * @return mixed
     */
    public function actionNews()
    {
        return $this->render('news');
    }
    

    public function actionSite1()
    {
        return $this->render('site1');
    }

    public function actionSite2()
    {
        return $this->render('site2');
    }

    public function actionSite3()
    {
        return $this->render('site3');
    }

    public function actionSite4()
    {
        return $this->render('site4');
    }

    public function actionSite5()
    {
        return $this->render('site5');
    }



  

    public function actionComment1()
    {
        if (Yii::$app->user->isGuest)
            return $this->goHome();
        // find certain news
        $news = news::findAll(['id' => 1]);
        $comment = Comment::findAll(['New_id' => 1]);
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->submit())
            {
                return $this->redirect(array('/site/comment1', 'message' => '发布成功！', 'id' => 1));
            }
        }

        return $this->render('comment1', [
            'news' => $news,
            'comment' => $comment,
            'model' => $model,
        ]);
    }

    public function actionComment2()
    {
        if (Yii::$app->user->isGuest)
            return $this->goHome();
        // find certain news
        $news = news::findAll(['id' => 2]);
        $comment = Comment::findAll(['New_id' => 2]);
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->submit())
            {
                return $this->redirect(array('/site/comment2', 'message' => '发布成功！', 'id' => 2));
            }
        }

        return $this->render('comment2', [
            'news' => $news,
            'comment' => $comment,
            'model' => $model,
        ]);
    }

    public function actionComment3()
    {
        if (Yii::$app->user->isGuest)
            return $this->goHome();
        // find certain news
        $news = news::findAll(['id' => 3]);
        $comment = Comment::findAll(['New_id' => 3]);
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->submit())
            {
                return $this->redirect(array('/site/comment3', 'message' => '发布成功！', 'id' => 3));
            }
        }

        return $this->render('comment3', [
            'news' => $news,
            'comment' => $comment,
            'model' => $model,
        ]);
    }

    public function actionComment4()
    {
        if (Yii::$app->user->isGuest)
            return $this->goHome();
        // find certain news
        $news = news::findAll(['id' => 4]);
        $comment = Comment::findAll(['New_id' => 4]);
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->submit())
            {
                return $this->redirect(array('/site/comment4', 'message' => '发布成功！', 'id' => 4));
            }
        }

        return $this->render('comment4', [
            'news' => $news,
            'comment' => $comment,
            'model' => $model,
        ]);
    }

    public function actionComment5()
    {
        if (Yii::$app->user->isGuest)
            return $this->goHome();
        // find certain news
        $news = news::findAll(['id' => 5]);
        $comment = Comment::findAll(['New_id' => 5]);
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->submit())
            {
                return $this->redirect(array('/site/comment5', 'message' => '发布成功！', 'id' => 5));
            }
        }

        return $this->render('comment5', [
            'news' => $news,
            'comment' => $comment,
            'model' => $model,
        ]);
    }

    



    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
