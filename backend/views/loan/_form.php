<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\Loan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-form">
    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'dollar')->textInput() ?>

    <?= $form->field($model, 'code_type')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Yii::$app->params['code_type'], 'id', 'name'),
        'options' => ['placeholder' => '选择证件类型'],
        'pluginOptions' => [
        '   allowClear' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'starttime')->textInput() ?>

    <?= $form->field($model, 'endtime')->textInput() ?>

    <?= $form->field($model, 'paytime')->textInput() ?>

    <?= $form->field($model, 'assure_type')->textInput() ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Yii::$app->params['loan_status'], 'id', 'name'),
        'options' => ['placeholder' => '选择状态'],
        'pluginOptions' => [
        '   allowClear' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
