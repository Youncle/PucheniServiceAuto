<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title = 'ITP';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="body-inner">

    <!-- Topbar -->



    <section id="page-title" >
        <?= Html::img(Url::to('/pucheniService/images/itp.jpg', true), ['alt'=>'Welcome to POLO','class'=>'img-fluid']);?>
        <div class="container">

            <div class="page-title">
                <h1 class="text-uppercase text-medium">ITP</h1>
                <span>Esti responsabil pentru tine si cei din jurul tau. Fa-ti ITP-ul, nu mai astepta!</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <section class="p-b-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
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






