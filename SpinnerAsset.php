<?php
namespace diiimonn\spinner;

use yii\web\AssetBundle;

/**
 * Class SpinnerAsset
 * @package diiimonn\spinner
 */
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@bower/canvas-spinners';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public $js = [
        'js/excanvas/excanvas.js',
        'js/spinners/spinners.min.js',
    ];
}