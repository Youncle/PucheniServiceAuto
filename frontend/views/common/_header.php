<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<header id="header" data-transparent="true" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="<?= Url::to(['/site/index'])?>" >
                    <?= Html::img(Url::to('/pucheniService/images/logo.png', true), ['alt'=>'Service Pucheni','class' =>'logo']);?>
                </a>
            </div>
            <!--End: Logo-->



            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="menu-uppercase">
                <div class="container">
                    <?= $this->render('@app/views/common/_nav') ?>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>