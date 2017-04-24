<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/bootstrap-material-design-font/css/material.css',
        'assets/tether/tether.min.css',
        'assets/bootstrap/css/bootstrap.min.css',
        'assets/dropdown/css/style.css',
        'assets/animate.css/animate.min.css',
        'assets/theme/css/style.css',
        'assets/mobirise/css/mbr-additional.css'
    ];
    public $js = [
        'assets/web/assets/jquery/jquery.min.js',
        'assets/tether/tether.min.js',
        'assets/bootstrap/js/bootstrap.min.js',
        'assets/smooth-scroll/smooth-scroll.js',
        'assets/dropdown/js/script.min.js',
        'assets/touch-swipe/jquery.touch-swipe.min.js',
        'assets/viewport-checker/jquery.viewportchecker.js',
        //'assets/jarallax/jarallax.js',
        'assets/theme/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
