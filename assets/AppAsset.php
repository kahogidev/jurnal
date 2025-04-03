<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files/';
    public $css = [
     "favicon/apple-icon-57x57.png",
	"favicon/apple-icon-60x60.png",
	"favicon/apple-icon-72x72.png",
	"favicon/apple-icon-76x76.png",
	"favicon/apple-icon-114x114.png",
	"favicon/apple-icon-120x120.png",
	"favicon/apple-icon-144x144.png",
	"favicon/apple-icon-152x152.png",
	"favicon/apple-icon-180x180.png",
	"favicon/android-icon-192x192.png",
	"favicon/favicon-32x32.png",
	"favicon/favicon-96x96.png",
	"favicon/favicon-16x16.png",
	"favicon/manifest.json",
    "https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,700i,900",
	"css/fontawesome-all.min.css",
	"css/iconfont.css",
	"css/vendor/bootstrap.min.css",
	"css/vendor/owl.carousel.min.css",
	"css/vendor/magnific-popup.css",
	"css/vendor/animate.css",
	"css/style.css",
        ];
    public $js = [
    "/js/vendor/jquery.min.js",
	"js/vendor/jquery-migrate.min.js",
	"js/vendor/easing-1.3.js",
	"js/vendor/jquery.waypoints.min.js",
	"js/vendor/owl.carousel.min.js",
	"js/vendor/slick.min.js",
	"js/vendor/bootstrap.bundle.min.js",
	"js/vendor/isotope.pkgd.min.js",
	"js/vendor/jquery.counterup.js",
	"js/vendor/jquery.magnific-popup.min.js",
	"js/vendor/jquery.nicescroll.min.js",
	"https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2",
	"js/plugins.js",
	"js/main.js",

    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
