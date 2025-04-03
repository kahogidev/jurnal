<div class="section-full bg-white content-inner-1">
    <div class="container">
        <div class="section-head text-center ">
            <h3 class="h3 text-uppercase"> <span class="text-primary">Yangiliklar</span></h3>
        </div>
        <div class="section-content">
            <div class="blog-carousel owl-carousel owl-theme owl-btn-1 primary owl-btn-center-lr owl-dots-black-full">


                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php $img = app\models\StaticFunctions::getImage('news', $model->id, $model->image) ?>

                        <div class="item">
                            <div class="dez-box">
                                <div class="dez-media">
                                    <a href="#"><img src="<?=$img?>" alt=""></a>
                                </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-meta ">

                                    </div>
                                    <h4 class="dez-title m-t5 m-b10"><a href="#"><?=$model['title_'.Yii::$app->language];?></a></h4>
                                    <p class="m-b15"><?=$model['description_'.Yii::$app->language];?> </p>
                                    <a href="#" class="site-button">Batafsil</a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif ;?>
            </div>
        </div>
    </div>
</div>
