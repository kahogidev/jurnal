<section style="padding-top: 350px" class="cmt-row blog_2-section mt_240 res-991-mt-0 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- section title -->
                <div class="section-title">
                    <div class="title-header pb-5">
                        <h5><?= Yii::t("app", "tours")?></h5>
                        <h2 class="title"><?= Yii::t("app", "tours")?></h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <!-- slick_slider -->
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "centerMode":true, "initialSlide":2, "centerPadding":0, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('tours', $model->id, $model->images);
                    ?>
                    <div class="cmt-box-col-wrapper col-lg-12">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style3">
                            <div class="cmt-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="<?=$img?>" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-header">
                                    <div class="post-title featured-title">
                                        <h5><a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?=$model['title_'.Yii::$app->language];?></a></h5>
                                    </div>
                                </div>
                                <div class="post-meta">
                                                <span class="cmt-meta-line byline">
                                                    <img class="img-fluid" src="<?=$img?>" alt="post-img /"><?=$model->price?>UZS
                                                </span>
                                    <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i><?=$model->period?></span>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p><?=$model['description_'.Yii::$app->language];?></p>
                                </div>
                                <div class="post-bottom cmt-post-link">
                                    <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" tabindex="0"><i class="fa fa-minus"></i><?= Yii::t("app", "more")?></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>