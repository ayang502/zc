<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$controllerId = $this->context->uniqueId . '/';
?>
<div class="user-view">
    <p>
        <?php
        if ($model->status == 0 && Helper::checkRoute($controllerId . 'activate')) {
            echo Html::a(Yii::t('rbac-admin', 'Activate'), ['activate', 'id' => $model->id], [
                'class' => 'btn btn-primary',
                'data' => [
                    'confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                    'method' => 'post',
                ],
            ]);
        }
        ?>
        <?php
        if (Helper::checkRoute($controllerId . 'delete')) {
            echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </p>
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'username',
                'label' => '登录名',    
            ],
            [
                'attribute' => 'username',
                'label' => '手机号',
            ],
            [
                'attribute' => 'company',
                'label' => '公司名称',
            ],
            [
                'attribute' => 'created_at',
                'label' => '创建时间',
            ],
            [
                'attribute' => '状态',    
                'value' => function($model) {
                    return $model->status == 0 ? '冻结' : '正常';
                },    
            ],
        ],
    ])
    ?>
</div>
