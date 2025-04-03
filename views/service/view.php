<div class="section-full bg-white content-inner" id="services">
    <div class="container">
        <div class="section-head text-center ">
            <h3 class="h3 text-uppercase"><span class="text-primary"><?= Yii::t("app", "services0")?></span></h3>
            <p><?= Yii::t("app", "services0_0")?></p>
        </div>
        <div class="section-content ">
            <div class="row">

                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php $img = app\models\StaticFunctions::getImage('services', $model->id, $model->image) ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="#"><img src="<?=$img?>" alt=""></a> </div>
                                <div class="dez-info p-a30 border-1">
                                    <h4 class="dez-title m-t0"><a href="#"><?=$model['title_'.Yii::$app->language];?></a></h4>
                                    <div class="dez-separator bg-primary"></div>
                                    <p class="m-b15"><?=$model['description_'.Yii::$app->language];?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php   endif;?>
            </div>
        </div>
    </div>
</div>
