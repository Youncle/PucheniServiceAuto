<?php

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Angajat;

?>
<!-- TEAM -->
<section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>MEET OUR TEAM</h2>
            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
        </div>
        <div class="row team-members">

            <?php

    $services=Angajat::find()->all();


    foreach ($services as $key=>$value){
        ?>

            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <?= Html::img(Yii::getAlias('@web').'/Angajatiuploads/'. $value->photo)?>
                    </div>
                    <div class="team-desc">
                        <h3> <?= $value->name ?></h3>
                        <span>Auto Engineer</span>
                        <p><?= $value->description ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
<!--            <div class="col-lg-3">-->
<!--                <div class="team-member">-->
<!--                    <div class="team-image">-->
<!--                        --><?//= Html::img(Url::to('/pucheniService/images/angajat2.jpg', true));?>
<!--                    </div>-->
<!--                    <div class="team-desc">-->
<!--                        <h3>Terente</h3>-->
<!--                        <span>Team leader</span>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3">-->
<!--                <div class="team-member">-->
<!--                    <div class="team-image">-->
<!--                        --><?//= Html::img(Url::to('/pucheniService/images/angajat3.jpg', true));?>
<!--                    </div>-->
<!--                    <div class="team-desc">-->
<!--                        <h3>Horatiu Taina</h3>-->
<!--                        <span>Mechanics and Electronics Specialist</span>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3">-->
<!--                <div class="team-member">-->
<!--                    <div class="team-image">-->
<!--                        --><?//= Html::img(Url::to('/pucheniService/images/angajat4.jpg', true));?>
<!--                    </div>-->
<!--                    <div class="team-desc">-->
<!--                        <h3>Victor zis Shaorma</h3>-->
<!--                        <span>ITP Specialist</span>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>
</section>
<!-- end: TEAM -->