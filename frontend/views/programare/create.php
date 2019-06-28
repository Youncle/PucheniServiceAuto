<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Programare */


$this->params['breadcrumbs'][] = ['label' => 'Programare', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/programare/_title') ?>

<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_programareClientiForm', [
        'model' => $model,
    ]) ?>

</div>
