<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\Loan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'dollar') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'code_type') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'starttime') ?>

    <?php // echo $form->field($model, 'endtime') ?>

    <?php // echo $form->field($model, 'paytime') ?>

    <?php // echo $form->field($model, 'assure_type') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
