<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Loan */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('loan', 'Index');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-index">
    <p>
        <?= Html::a(Yii::t('loan', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'dollar',
            'name',
            'gender',
            // 'code_type',
            // 'code',
            // 'starttime',
            // 'endtime',
            // 'paytime',
            // 'assure_type',
            // 'contact',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
