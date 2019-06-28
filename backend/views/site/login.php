<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


$this->params['breadcrumbs'][] = $this->title;
?>

<section class="fullscreen" style="background-color: lightgrey">

    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="text-center m-b-30">
                <a href="<?= Url::to(['/site/index'])?>" class="logo">
                    <?= Html::img(Url::to('/pucheniService/images/logo.png', true), ['alt'=>'Service Pucheni','class' =>'logo']);?>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <h3>Login to your Account</h3>

                    <div class="row">
                        <div class="col-lg-5">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- end: Section -->

