<?php
namespace diiimonn\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use diiimonn\assets\SpinnerCanvasAsset;

/**
 * Class SpinnerCanvas
 * @package diiimonn\widgets
 */
class SpinnerCanvas extends Widget
{
    public $options = [];
    public $scriptOptions = [];
    protected $scriptOptionsDefault = [
        'radius' => 3,
        'height' => 5,
        'width' => 1.6,
        'dashes' => 10,
        'opacity' => 1,
        'padding' => 3,
        'rotation' => 700,
        'color' => '#666666',
    ];

    /**
     * @var \yii\web\AssetBundle
     */
    protected $asset;

    public function init()
    {
        parent::init();

        $this->registerAsset();
        $this->registerClientScript();
    }

    public function run()
    {
        $this->options['id'] = $this->id;

        return Html::tag('div', Html::tag('div', '', [
            'id' => $this->id . '-spinner'
        ]), $this->options);
    }

    public function registerAsset()
    {
        $this->asset = SpinnerCanvasAsset::register($this->getView());
    }

    public function registerClientScript()
    {
        $js = 'window["' . $this->id . 'Spinner"] = Spinners.create("#' . $this->id . '-spinner", ' . Json::encode(ArrayHelper::merge($this->scriptOptionsDefault, $this->scriptOptions)) . ').play().center();';
        $this->getView()->registerJs($js);
    }
}