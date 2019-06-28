<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<?= $this->render('@app/views/contactForm/_title') ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="m-t-30">
                <?php $form = ActiveForm::begin(
                    [
                        'id' => 'contact-form',
                        'options' => [
                            'class' => 'widget-contact-form'
                        ]
                    ]); ?>


                <div class="row">
                    <div class="form-group col-md-6">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= $form->field($model, 'email') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                <?= $form->field($model, 'subject') ?>
                    </div>
                </div>

                <div class="form-group">
                <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>
                </div>

                <div class="form-group">
                <?= $form->field($model, 'verifyCode',['options' => [
                    'class' => 'g-recaptcha',

                ]])->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                </div>


                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Address & Map</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Pucheni Service</strong><br>
                            Popilor 470, Puchenii Mosneni 107492<br>
                            <abbr title="Phone">P:</abbr> 0722 625 663
                        </address>
                    </div>
                </div>
                <script>

                    function initMap() {
                        var myLatLng = new google.maps.LatLng(44.8158719, 26.0943921);

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 12,
                            center: myLatLng
                        });

                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            visible:true
                        });

                    }
                </script>
                <!-- Google map sensor -->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHwMTlmaSH_cQXP1xNYsa54FoRaOE7UMg&callback=initMap"></script>
                <div id="map" class="map m-t-30" data-map-address="Puchenii Mosneni, Romania" data-map-zoom="10"  data-map-type="ROADMAP"></div>
                <!-- Google map sensor -->

            </div>
        </div>
    </div>

</section>

</div>



