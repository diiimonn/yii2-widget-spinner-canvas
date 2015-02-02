# yii2-widget-spinner
A widget to render canvas with animated loading spinners

## Installation

To install with composer:

```
$ php composer.phar require diiimonn/yii2-widget-spinner "dev-master"
```

or add

```
"diiimonn/yii2-widget-spinner": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php
use diiimonn\spinner\Spinner;

...

<?= Spinner::widget([
    'options' => [
        'class' => 'spinner',
    ],
    'scriptOptions' => [
        'radius' => 3,
        'height' => 5,
        'width' => 1.6,
        'dashes' => 10,
        'opacity' => 1,
        'padding' => 3,
        'rotation' => 700,
        'color' => '#666666',
    ]
]) ?>
...
```