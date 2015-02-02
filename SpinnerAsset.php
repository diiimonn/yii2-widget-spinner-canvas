<?php
namespace diiimonn\spinner;

use yii\web\AssetBundle;

/**
 * Class SpinnerAsset
 * @package diiimonn\spinner
 */
class SpinnerAsset extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public $js = [
        '@vendor/diiimonn/spinners/js/excanvas/excanvas.js',
        '@vendor/diiimonn/spinners/js/spinners/spinners.min.js',
    ];
}