<?php

use common\models\search\AngajatSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\AngajatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Echipa noastra';
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
            <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row mb-3">
            <div class="col-lg-12">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

//            'id',
                        [
                            'attribute' => 'photo',
                            'format' => 'html',
                            'value' => function ($data) {
                                return Html::img(Yii::getAlias('@web').'/Angajatiuploads/'. $data['photo'],
                                    ['width' => '525px','height' => '350px']);
                            },
                        ],
                        'name',
                        'description',

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
                ]); ?>

            </div>
        </div>
