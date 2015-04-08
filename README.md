# Mobile Detect extension for Yii2

This extension provides an Yii2 component wrapper for [Mobile_Detect](http://mobiledetect.net/) PHP class and
can be used to detect whether a device is mobile one in your Yii2 application.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ezze/yii2-mobile-detect
```

or add

```json
"yiisoft/yii2-mobile-detect": "~0.1.0"
```

to the `require` section of your `composer.json` file.

## Usage

1. Add `mobileDetect` component to your [Yii2 configuration](http://www.yiiframework.com/doc-2.0/guide-concept-configurations.html#application-configurations)
like this:

    ```php
    'mobile-detect' => [
        'class' => '\ezze\yii2\mobiledetect\MobileDetect'
    ]
    ```

2. Use `mobileDetect` component as [Mobile_Detect](http://mobiledetect.net/) PHP class:

    ```php
    echo \Yii::$app->mobileDetect->isMobile();
    ```