<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'photo',
                'value' =>  function ($data) {
                    return Html::img(Yii::getAlias('@web').'/uploads/'. $data['photo'],
                        ['width' => '525px','height' => '350px']);
                },
                'format' =>'html',
            ],
            'name',
            'description',
        ],
    ]) ?>

</div>
