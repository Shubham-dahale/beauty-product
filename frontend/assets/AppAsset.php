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
        'css/site.css',
        'web/css/flexslider.css',
        'web/css/zoomslider.css',
        'web/css/style.css',
        'web/css/font-awesome.css',
        '//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600',
        '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i',
        'web/css/jquery-ui.css',
        'web/css/lightbox.css',
        'web/css/bootstrap-touch-slider.css',
        'css/custom.css'


    ];
    public $js = [
        'web/js/lightbox-plus-jquery.min.js',
        'web/js/modernizr-2.6.2.min.js',
        'web/js/jquery.zoomslider.min.js',
        'web/js/main.js',
        'web/js/jquery.flexslider.js',
        'web/js/jquery-ui.js',
        'web/js/move-top.js',
        'web/js/easing.js',
        'web/js/custom.js',
        
        // 'web/js/bootstrap.min.js',
         'web/js/bootstrap-touch-slider.js',
        'web/js/bootstrap-touch-slider-min.js',
        // 'web/js/jquery.min.js',
        'web/js/bootstrap.min.js'
        
         
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
