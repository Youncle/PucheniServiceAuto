<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<!-- WELCOME -->
<section id="welcome" class="p-b-0">
    <div class="container">
        <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
            <h2>BINE ATI VENIT PUCHENI AUTO SERVICE</h2>
            <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
        </div>
        <div class="row" data-animate="fadeInUp">
            <div class="col-lg-12">
                <?= Html::img(Url::to('/pucheniService/images/mechanic.jpg', true), ['alt'=>'Welcome to POLO','class'=>'img-fluid']);?>
            </div>
        </div>
    </div>
</section>
<!-- end: WELCOME -->

<!-- WHAT WE DO -->
<section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>WHAT WE DO</h2>
            <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4>ITP</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="200">
                    <h4>Mechanics</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="400">
                    <h4>Electronics</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="600">
                    <h4>Tire Change</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="800">
                    <h4>Assistance</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="1000">
                    <h4>Analysis and Diagnosis</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- END WHAT WE DO -->
