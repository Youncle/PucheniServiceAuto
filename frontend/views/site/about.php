<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="body-inner">



    <section id="page-title" >
        <?= Html::img(Url::to('/pucheniService/images/service_bmw.jpg', true), ['alt'=>'Welcome to POLO','class'=>'img-fluid']);?>
        <div class="container">

            <div class="page-title">
                <h1 class="text-uppercase text-medium">ABOUT US</h1>
                <span>Work is easy when you have all tools around you!</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <section class="p-b-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2>THE COMPANY</h2>
                        <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
                    </div>
                </div>
                <div class="col-lg-6 m-t-60">
                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="100" data-delay="100" data-type="%">
                            <div class="progress-title">HTML5</div>
                        </div>
                    </div>

                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="94" data-delay="200" data-type="%">
                            <div class="progress-title">CSS3</div>
                        </div>
                    </div>

                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                            <div class="progress-title">JQUERY</div>
                        </div>
                    </div>

                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="65" data-delay="400" data-type="%">
                            <div class="progress-title">MYSQL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <?= $this->render('@app/views/common/_team') ?>





</div>    <!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>






