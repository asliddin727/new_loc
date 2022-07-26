<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // "https://fonts.googleapis.com/css?family=Montserrat:400,700",
        // "https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700",
        "/vendors/bootstrap/bootstrap.min.css",
        "/vendors/fontawesome/css/all.min.css",
        "/vendors/themify-icons/themify-icons.css",
        "/vendors/nice-select/nice-select.css",
        "/vendors/linericon/style.css",
        "/vendors/owl-carousel/owl.theme.default.min.css",
        "/vendors/owl-carousel/owl.carousel.min.css",
        "/vendors/nouislider/nouislider.min.css",
        "/css/style.css",
        "/css/styles.css"
    ];


    public $js = [
        // "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
        // "https://cdn.startbootstrap.com/sb-forms-latest.js",
        // "https://use.fontawesome.com/releases/v6.1.0/js/all.js",

        "/vendors/jquery/jquery-3.2.1.min.js",
        "/vendors/bootstrap/bootstrap.bundle.min.js",
        "/vendors/skrollr.min.js",
        "/vendors/owl-carousel/owl.carousel.min.js",
        "/vendors/nice-select/jquery.nice-select.min.js",
        "/vendors/jquery.ajaxchimp.min.js",
        "/vendors/nouislider/nouislider.min.js",
        "/vendors/mail-script.js",
        "/js/main.js",

        "/js/scripts.js"
        
    ];


    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
