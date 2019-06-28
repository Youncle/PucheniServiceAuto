<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Service;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;

?>
<section id="page-content" class="no-sidebar">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>

        <p>
            <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-lg-12">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                       // 'filterModel' => $searchModel,
                        'layout' => "{items}\n{pager}",
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

//            'id',
                            'name',
                            'description',
                            [
                                'attribute' => 'updated_at',
                                'value' => function ($model, $key, $index, $grid) {
                                    return date("d.m.Y H:i:s", $model->createdAt);
                                },
                            ],
                            [
                                'attribute' => 'updated_at',
                                'value' => function ($model, $key, $index, $grid) {
                                    return date("d.m.Y H:i:s", $model->updatedAt);
                                },
                            ],
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{delete} {update} {details}',
                                'header' => 'Actions',
                                'buttons' =>
                                    [
                                        'details' => function ($url, $model) {
                                            return Html::a('<button class="btn btn-sm">Details</button>', Url::toRoute(['view', 'id' => $model->id]), [
                                                'title' => Yii::t('yii', 'Details'),
                                                'data-pjax' => '0',

                                            ]); },
                                        'update' => function ($url, $model) {
                                            return Html::a('<button class="btn btn-sm">Update</button>', Url::toRoute(['update', 'id' => $model->id]), [
                                                'title' => Yii::t('yii', 'Update'),
                                                'data-pjax' => '0',

                                            ]); },
                                        'delete' => function ($url, $model) {
                                            return Html::a('<button class="btn btn-sm">Delete</button>', Url::toRoute(['delete','id' => $model->id]), [
                                                'title' => Yii::t('yii', 'Delete'),
                                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                                'data-method' => 'post',
                                                'data-pjax' => '0',

                                            ]);
                                        }
                                    ]
                                ],
                            ],


                            'tableOptions' => [
                                'class' => 'table table-responsive table-bordered table-hover dataTable',

                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>

    </div>

</section>

