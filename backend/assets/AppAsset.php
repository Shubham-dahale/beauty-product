<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'web/vendor/metisMenu/metisMenu.min.css',
        'web/dist/css/sb-admin-2.css',
        'web/vendor/morrisjs/morris.css',
        'web/vendor/font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
        'web/vendor/jquery/jquery.min.js',
        'web/vendor/bootstrap/js/bootstrap.min.js',
        'web/vendor/metisMenu/metisMenu.min.js',
        'web/vendor/raphael/raphael.min.js',
        'web/vendor/morrisjs/morris.min.js',
        'web/data/morris-data.js',
        'web/dist/js/sb-admin-2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
