<?php

use backend\models\Messages;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */


$message = Messages::find()->where(['status'=>0])->count('id');
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">Star</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="<?=Url::to(['message/index'])?>">
                        <i class="fa fa-envelope-o"></i>
                        <?php if($message != 0):?>
                        <span class="label label-success"><?=$message?></span>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/assets/img/team/1.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->username?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/assets/img/team/1.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                            <?=Yii::$app->user->identity->username?> - Sayt Admini
                                <small><?=date('Y-m-d')?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-success btn-flat">Shaxsiy Kabinet</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Chiqish',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
