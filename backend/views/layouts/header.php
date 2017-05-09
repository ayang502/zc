<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
</div>
<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            你好:<?php echo Yii::$app->user->identity->username?>
            <i class="fa fa-user fa-fw"></i>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="/admin/user/changepassword"><i class="fa fa-user fa-fw"></i>修改密码</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="/admin/user/logout"><i class="fa fa-sign-out fa-fw"></i>安全退出</a>
            </li>
        </ul>
    </li>
</ul>
