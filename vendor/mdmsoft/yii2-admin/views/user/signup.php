<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = Yii::t('rbac-admin', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <?= Html::errorSummary($model)?>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['class' => "form-control"])->label("用户名")?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput(['class' => "form-control"])->label("密码") ?>
                </div>
                <div class="form-group">
                <?= $form->field($model, 'mobile')->textInput(['class' => "form-control"])->label("手机号码")?>
                </div>
                <div class="form-group">
                <?= $form->field($model, 'contact')->textInput(['class' => "form-control"])->label("联系人")?>
                </div>
                <div class="form-group">
                <?= $form->field($model, 'company')->textInput(['class' => "form-control"])->label("公司名称")?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('rbac-admin', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
