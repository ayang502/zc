<?php

use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <p>
        <?= Html::a(Yii::t('rbac-admin', 'Signup'), ['signup'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'username',
                'label' => '用户名',
            ],
            [
                'label' => '手机',
                'attribute' => 'mobile',
            ],
            [
                'label' => '公司名称',
                'attribute' => 'company',
            ],
            [
                'label' => '联系人',
                'attribute' => 'contact',
            ],
            [
                'label' => '状态',
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? '冻结' : '正常';
                },
                'filter' => [
                    0 => '冻结',
                    10 => '正常'
                ]
            ],
            [
                'label' => '创建时间',
                'filter' => false,
                'attribute' => 'created_at',
                'value' => function($data) {
                    return date('Y-m-d H:i:s', $data->created_at); 
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn(['view', 'activate', 'delete']),
                'buttons' => [
                    'activate' => function($url, $model) {
                        if ($model->status == 10) {
                            return '';
                        }
                        $options = [
                            'title' => Yii::t('rbac-admin', 'Activate'),
                            'aria-label' => Yii::t('rbac-admin', 'Activate'),
                            'data-confirm' => Yii::t('rbac-admin', '是否开启该用户'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                    }
                    ]
                ],
            ],
        ]);
        ?>
</div>
