<?php
namespace diiimonn\widgets;

use yii\web\AssetBundle;

/**
 * Class SpinnerAsset
 * @package diiimonn\widgets
 */
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@bower/canvas-spinners/js';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public $js = [
        'spinners/spinners.min.js',
    ];
}