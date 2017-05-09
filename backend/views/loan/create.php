<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Loan */

$this->title = Yii::t('loan', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('loan', 'Index'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
