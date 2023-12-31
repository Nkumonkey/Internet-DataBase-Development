<?php


/**
 * Team: 少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
 * Coding by: 杨万睿
 * 信息修改视图 view
*/
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \..\models\ModifyForm */

/* @var $message string 发送的通知信息 */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Modify';
$this->params['breadcrumbs'][] = $this->title;

// $model->sex = Yii::$app->user->getIdentity()->sex;
?>
<div class="site-modify">
    <!-- BEGIN: .cover -->
    <div class="page-heading-85912" style="background-image: url('assets/frontend/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h1 class="mb-0 heading text-white">修改信息</h1>
                    <p class="mb-0 text-white">在这里，您可以修改您的账户密码和用户名。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <?php
                if (isset($message))
                    echo "<h5 class=\"text-danger\">" . $message . "</h5>";
                ?>
            </div>
        </div>
    </div>
    <center><div class="custom-breadcrumns-23195 border-bottom">
        <div class="container">
            <a href="<?php echo Yii::$app->getHomeUrl(); ?>">主页</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">修改信息</span>
        </div>
    </div></center>
    <!-- END: .cover -->
    <div class="container">
        <p></p>
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-4 mb-lg-0">


                <?php $form = ActiveForm::begin(['id' => 'modify-form',
                    'fieldConfig' => [
                        'errorOptions' => ['class' => 'text-danger']
                    ]
                ]); ?>
                <div class="form-group">
                    <?= $form->field($model, 'account', ['labelOptions' => ['label' => '账户']])->textInput(['autofocus' => true, 'value' => Yii::$app->user->getIdentity()->account,'readOnly'=>true]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password', ['labelOptions' => ['label' => '旧密码']])->passwordInput() ?>
                </div>

                <div class="form-group">
                    <?= $form->field($model, 'newpassword', ['labelOptions' => ['label' => '新密码']])->passwordInput() ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'newusername', ['labelOptions' => ['label' => '新用户名/昵称']])->textInput(['autofocus' => true, 'value' => Yii::$app->user->getIdentity()->username]) ?>
                </div>

                <div class="form-group">
                    <?= $form->field($model, 'tel', ['labelOptions' => ['label' => '联系方式']])->textInput(['autofocus' => true, 'value' => Yii::$app->user->getIdentity()->tel]) ?>
                </div>
                

                <div class="form-group">
                    <?= Html::submitButton('提交修改', ['class' => 'btn btn-primary', 'name' => 'modify-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>


</div>