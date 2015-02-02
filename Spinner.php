<?php
namespace diiimonn\spinner;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

/**
 * Class Spinner
 * @package diiimonn\spinner
 */
class Spinner extends Widget
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

    public function run()
    {
        $this->registerClientScript();

        $this->options['id'] = $this->id;

        return Html::tag('div', Html::tag('div', '', [
            'id' => $this->id . '-spinner'
        ]), $this->options);
    }

    public function registerClientScript()
    {
        $view = $this->getView();
        SpinnerAsset::register($view);
        $js = 'window["' . $this->id . 'Spinner"] = Spinners.create("#' . $this->id . '-spinner", ' . Json::encode(ArrayHelper::merge($this->scriptOptionsDefault, $this->scriptOptions)) . ').play().center();';
        $view->registerJs($js);
    }
}