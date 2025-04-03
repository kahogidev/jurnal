<div class="page-content">
    <!-- inner page banner -->
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/">Bosh sahifa</a></li>
                <li><?= Yii::t("app", "member1")?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-area">
        <div class="container">
            <!-- blog start -->
            <div class="blog-post blog-single">
                <div class="dez-post-title ">
                    <h3 class="post-title">
                        </a></h3>
                </div>
                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="<?=$img?>" alt=""></a> </div>
                <div class="dez-post-text">
                    <h1> <?=$model->fullname?></h1>
                    <p><?= Yii::t("app", "addressc")." ".$model->address?></p>
                    <p><?= Yii::t("app", "email1").": ".$model->email?></p>
                    <p><?= Yii::t("app", "phone1").": ".$model->phone?></p>
                    <p><?= Yii::t("app", "university1").$model->university?></p>
                    <p><?= Yii::t("app", "degree1").$model->degree?></p>
                    <p><?= Yii::t("app", "skill1").$model->skill_first?></p>

                </div>

            </div>
            <!-- blog END -->
        </div>
    </div>
</div>
