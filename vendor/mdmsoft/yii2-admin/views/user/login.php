<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = Yii::t('rbac-admin', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">登录</h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <fieldset>
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['class' => "form-control"])->label("用户名")?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput(['class' => "form-control"])->label("密码") ?>
                        </div>
                        <div class="checkbox">
                            <label>
                            <?= $form->field($model, 'rememberMe')->checkbox()->label('记住登录状态') ?>
                            </label>
                           </div>
                            <?= Html::submitButton(Yii::t('rbac-admin', '登录'), ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login']) ?>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
