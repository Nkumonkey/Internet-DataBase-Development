<?php

/**
 * 互联网团队
 * 李新
 * 关于我们
*/

$tmp = \common\models\Team::findAll(['id' => 1]);
if (sizeof($tmp) != 0)
    $tmp = $tmp[0];
else $tmp = null;

$captain = \common\models\TeamMember::findOne(['captain' => 1]);
// $captain_user = null;
// if ($captain != null)
//     $captain_user = \common\models\User::findIdentity($captain->account);

$teamers = \common\models\TeamMember::findAll(['captain' => 0]);
// $teamers_user = [];
// if (sizeof($teamers) != 3)
//     $teamers = null;
// else {
//     for ($i = 0; $i < 3; $i++)
//         $teamers_user[]=\common\models\User::findIdentity($teamers[$i]->account);
// }
?>

<section class="section" id="testmonial">
    <div class="container">
        <h3 class="section-title text-center mb-0">团队简介</h3>
        <p><?= $tmp == null ? "你的数据库没有团队简介" : $tmp->introduct ?></p>
        <h6 class="section-title text-center mb-0">我们的团队</h6>
        <h6 class="section-subtitle mb-5 text-center">——<?= $tmp->name ?></h6>
        <div class="row">
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/dyf.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $captain->name ?>
                                    <?= $tmp == null ? "专业团队" : $captain->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Captain:
                                    <a href="<?= $captain->git_link ?>"> GitHub 个人地址(下载代码) ዽ</a>
                                </small>        
                            </div>
                        </div>
                        <p class="mb-0">保护环境，拒绝核污染！</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/hyx.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[0]->name ?>
                                    <?= $tmp == null ? "专业团队" : $teamers[0]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[0]->git_link ?>"> GitHub 个人地址(下载代码) ጿ </a>
                                </small>     
                            </div>
                        </div>
                        <p class="mb-0">我们的海洋不是核废水垃圾桶！</p>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="section-subtitle mb-3 text-center">ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈዽ ጿ</h6>
        <div class="row">
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/cjn.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[1]->name ?> 
                                    <?= $tmp == null ? "专业团队" : $teamers[1]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[1]->git_link ?>"> GitHub 个人地址(下载代码) ኈ </a> 
                                </small>     
                            </div>
                        </div>
                        <p class="mb-0">环保从我做起，拒绝日本核污水排放！</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/xjq.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[2]->name ?>
                                    <?= $tmp == null ? "专业团队" : $teamers[2]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[2]->git_link ?>"> GitHub 个人地址(下载代码) ቼ </a>
                                </small>        
                            </div>
                        </div>
                        <p class="mb-0">选择环境，反对核废水对生态的破坏！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- BEGIN: #main -->
<div id="main">
    <!-- BEGIN: .site-section -->
    <div class="site-section bg-light">
        <!-- BEGIN: .container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="https://github.com/HYX20011209/webDB"
                       class="btn btn-primary btn-block">为我们的团队贡献代码</a>
                </div>
            </div>
        </div>
        <!-- END: .container -->
    </div>
    <!-- END: .site-section -->
</div>
<!-- END: #main -->