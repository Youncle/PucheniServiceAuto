<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $servicePosts yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <?=\yii\widgets\ListView::widget([
            'dataProvider' => $servicePosts,
            'itemView' => 'view',
            'layout' => '<div class="row mb-3"><div class="col-lg-6">{items}</div></div><div class="text-center">{pager}</div>',
]) ?>

</div>
