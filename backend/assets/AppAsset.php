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
    public $sourcePath = 'admin';
    public $css = [
        'admin/vendor/bootstrap/css/bootstrap.min.css',
        'admin/vendor/metisMenu/metisMenu.min.css',
        'admin/dist/css/sb-admin-2.min.css',
        'assets/157be0c7/jquery-ui.css',
        //'admin/vendor/morrisjs/morris.css',
        'admin/vendor/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'admin/vendor/bootstrap/js/bootstrap.min.js',
        'admin/vendor/metisMenu/metisMenu.min.js',
        'admin/vendor/raphael/raphael.min.js',
        'assets/157be0c7/jquery-ui.js',
        //'admin/vendor/morrisjs/morris.min.js',
        //'admin/data/morris-data.js',
        'admin/dist/js/sb-admin-2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
