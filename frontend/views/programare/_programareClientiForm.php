<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Programare */
/* @var $form yii\widgets\ActiveForm */
?>


    <div class="row-center">
        <div class="content col-lg-6">

            <?php $form = ActiveForm::begin(); ?>

            <h3>Date Personale</h3>

            <?= $form->field($model, 'firstName')->textInput(['maxlength' => 45]) ?>

            <?= $form->field($model, 'lastName')->textInput(['maxlength' => 45]) ?>

            <?= $form->field($model, 'email1')->textInput()->label('Email') ?>

            <?= $form->field($model, 'phone1')->textInput(['maxlength' => 20])->label('Mobil') ?>

            <h3>Informatii Autovehicul</h3>

            <?= $form->field($model, 'marcaAuto')->textInput()->label('Marca Auto') ?>

            <?= $form->field($model, 'anFabricatie')->textInput()->label('An de Fabricatie') ?>

            <?= $form->field($model, 'serieSasiu')->textInput()->label('Seria de Sasiu') ?>

            <?= $form->field($model, 'caiPutere')->textInput()->label('Cai Putere') ?>

            <?= $form->field($model, 'culoare')->textInput()->label('Culoare') ?>

            <h3>Descriere Situatie</h3>

            <?= $form->field($model, 'type')->dropDownList(['0' => 'N/A','1' => 'ITP', '5' => 'Service', '10' => 'Altele']) ?>

            <?= $form->field($model, 'description')->textarea() ?>

            <h3>Data Programare</h3>

            <?= $form->field($model,'data')->widget(DatePicker::class,
                [
                    'options' => [
                        'class' => 'form-control',
                        'autocomplete' => 'off'
                    ],
                    'clientOptions' => ['dateFormat' => 'dd.mm.yy'],
                    'dateFormat' => 'php:Y-m-d'
                ]) ?>


            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
