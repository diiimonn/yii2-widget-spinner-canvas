<?php
namespace diiimonn\spinner;

use yii\web\AssetBundle;

/**
 * Class SpinnerAsset
 * @package diiimonn\spinner
 */
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/diiimonn/yii2-widget-spinner/assets';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}