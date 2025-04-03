<!--features-section-->
<section class="cmt-row features-section cmt-bgcolor-grey bg-img1 cmt-bg cmt-bgimage-yes cmt-bg-pattern clearfix">
    <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2">
                    <div class="title-header">
                        <h5><?= Yii::t("app", "category1")?></h5>
                        <h2 class="title"><?= Yii::t("app", "category1")?></h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <!-- slick_slider -->
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false,  "dots":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":590,"settings":{"slidesToShow": 1}}]}'>
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images);
                    ?>
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-country style2 bor_rad_5">
                            <div class="cmt-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="<?=$img?>" tabindex="-1"> <img style="height: 385px;width: 365px; object-fit: cover " class="img-fluid" src="<?=$img?>" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-content-icon_img-block">
                                        <img class="img-fluid" src="<?=$img?>" alt="image">
                                    </div>
                                    <div class="featured-title">
                                        <h5><a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" tabindex="-1"><?=$model['name_'.Yii::$app->language];?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</section>