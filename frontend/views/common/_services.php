
<!-- SERVICES -->
<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>SERVICES</h2>
            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
        </div>

        <div class="row">
            <?php

            use common\models\Service;

            $services=Service::find()->all();

            foreach ($services as $key=>$value){
                ?>

                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-wrench"></i></a>
                        </div>
                        <h3><?= $value->name ?></h3>
                        <p><?= $value->description ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</section>
<!-- end: SERVICES -->