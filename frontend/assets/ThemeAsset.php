<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'pucheniService/css/plugins.css',
        'pucheniService/css/style.css',
        'pucheniService/css/responsive.css',
        'pucheniService/css/custom.css',

    ];
    public $js = [
        'pucheniService/js/plugins.js',
        'pucheniService/js/functions.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',

    ];
}
