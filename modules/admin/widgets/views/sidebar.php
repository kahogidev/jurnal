
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div> <a href="<?=\yii\helpers\Url::to(['user/logout'])?>">
                <img src="/<?=Yii::$app->params['backend_files']?>/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </a>
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/user'])?>">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Foydalanuvchilar</div>
            </a>
        </li>



        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/departments'])?>">
                <div class="parent-icon"><i class="bx bxs-devices"></i>
                </div>
                <div class="menu-title">Bo'limlar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/services'])?>">
                <div class="parent-icon"><i class="bx bxs-sort-alt"></i>
                </div>
                <div class="menu-title">Xizmatlar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/news'])?>">
                <div class="parent-icon"><i class="bx bxs-shapes"></i>
                </div>
                <div class="menu-title">Yangiliklar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/candidates'])?>">
                <div class="parent-icon"><i class="bx bxs-contact"></i>
                </div>
                <div class="menu-title">Hodimlar</div>
            </a>
        </li>
        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/contacts'])?>">
                <div class="parent-icon"><i class="bx bxs-contact"></i>
                </div>
                <div class="menu-title">Kontaktlar</div>
            </a>
        </li>
        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/testimonials'])?>">
                <div class="parent-icon"><i class="bx bxs-quote-left"></i>
                </div>
                <div class="menu-title">Mijozlar fikrlari</div>
            </a>
        </li>







    </ul>
    <!--end navigation-->
</div>