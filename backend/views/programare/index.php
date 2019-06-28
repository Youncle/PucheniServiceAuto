<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programare-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Programare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'clientId',
            'type',
            'description:ntext',
            'employeeId',
            //'status',
            //'marcaAuto',
            //'anFabricatie',
            //'serieSasiu',
            //'caiPutere',
            //'culoare',
            //'data',
            //'startTime:datetime',
            //'endTime:datetime',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
