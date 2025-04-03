<div class="page-content">
    <!-- inner page banner -->
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/">Bosh sahifa</a></li>
                <li><?= Yii::t("app", "departments0")?></li>
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
                    <h1> <?=$model["title_".Yii::$app->language]?></h1>
                    <p></p>
                    <blockquote> <?=$model["description_".Yii::$app->language]?></blockquote>
                   </div>

            </div>
            <!-- blog END -->
        </div>
    </div>
</div>
