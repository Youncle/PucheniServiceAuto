<?php

use yii\helpers\Url;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Service Pucheni';
?>
<!DOCTYPE html>
<html lang="en">


<body>


<!-- Body Inner -->    <div class="body-inner">

    <!-- Header -->

    <!-- end: Header -->

    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative">

        <!-- Slide 1 -->
        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url('<?= Url::to('/pucheniService/images/service.jpg')?>');">
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <h1>PUCHENI AUTO SERVICE</h1>
                    <p>Say hello to the BEST and most flexible auto service in Prahova. Pucheni Auto Service can repair and improve any type of cars, and its motto is "Every customer is our most important customer.</p>
                    <a href="/programare/create" class="btn scroll-to" >Programeaza-te acum</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->

        <!-- Slide 2 -->
        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url('<?= Url::to('/pucheniService/images/slider/pattern.png')?>');">
            <div class="container">
                <div class="slide-captions text-left text-light">
                    <!-- Captions -->
                    <h1>200+ Laytout Demos</h1>
                    <p class="text-small">POLO is packed with 200+ pre-made layouts that allow you to quickly jumpstart your project. Completely customizable for creating your own designs.</p>
                    <a href="#welcome" class="btn scroll-to" >Explore more</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->

    </div>
    <!--end: Inspiro Slider -->
    

    <?= $this->render('@app/views/common/_portfolio') ?>

    <?= $this->render('@app/views/common/_services') ?>

    <?= $this->render('@app/views/common/_counters') ?>

    <!-- aici a fost o sectiune Blog pe care am sters-o , pentru ca nu avem nevoie -->

    <!-- aici a fost o sectiune Clienti pe care am sters-o , pentru ca nu avem nevoie -->


    <?= $this->render('@app/views/common/_team') ?>


</div>
<!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

</body>

</html>
