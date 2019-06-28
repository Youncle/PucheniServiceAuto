<section class="p-b-0">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>RECENT WORK</h2>
            <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
        </div>
    </div>
    <div class="portfolio">
        <!-- Portfolio Items -->
        <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">


            <?php

            use common\models\Portfolio;
            use yii\helpers\Html;

            $services=Portfolio::find()->all();

            foreach ($services as $key=>$value){
            ?>


            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <?= Html::img(Yii::getAlias('@web').'/uploads/'. $value->photo)?>
                    </div>
                    <div class="portfolio-description" data-lightbox="gallery">
                        <p><?= $value->description ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>



        </div>
        <!-- end: Portfolio Items -->

    </div>
</section>