<div class="section-full bg-white content-inner-1 bg-img-fix overlay-black-dark" style="background-image:url(images/background/bg1.jpg);">
    <div class="container">
        <div class="section-head text-center text-white">
            <h3 class="h3 text-uppercase"><?= Yii::t("app", "Shifoxona bo'limlari")?></h3>
        </div>
        <div class="section-content">
            <div class="owl-carousel blog-carousel owl-btn-3 btn-white owl-btn-center-lr owl-theme">


                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php $img = app\models\StaticFunctions::getImage('departments', $model->id, $model->image) ?>

                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-media">
                                    <a href="#"><img src="<?=$img?>" alt=""></a>
                                </div>
                                <div class="dez-info p-a20 border-1 bg-white">
                                    <div class="dez-post-meta ">

                                    </div>
                                    <h4 class="dez-title m-t15"><a href="#"><?=$model['title_'.Yii::$app->language];?></a></h4>
                                    <p class="m-b15"><?=$model['description_'.Yii::$app->language];?></p>
                                    <a href="#" class="site-button">Batafsil</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
