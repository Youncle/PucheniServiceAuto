<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Angajat */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Angajats', 'url' => ['index']];
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
                    return Html::img(Yii::getAlias('@web').'/Angajatiuploads/'. $data['photo'],
                        ['width' => '525px','height' => '350px']);
                },
                'format' =>'html',
            ],
            'description',
        ],
    ]) ?>

</div>
