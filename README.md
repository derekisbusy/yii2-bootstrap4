Yii2 Bootstrap 4
================
Bootstrap 4 assets for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-bootstrap4:dev-master
```

or add

```
"derekisbusy/yii2-bootstrap4": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\bootstrap4\BootstrapAsset;

BootstrapAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\bootstrap4\BootstrapAsset'
  ];
```


Documentation
-------------
 * [twbs/bootstrap](https://github.com/twbs/bootstrap#documentation)
 * [Bootrap 4 docs](https://getbootstrap.com/docs/4.3/getting-started/introduction/)
 * [Bootrap 4 examples](https://getbootstrap.com/docs/4.3/examples/)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
