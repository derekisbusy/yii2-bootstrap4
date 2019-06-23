<?php
namespace derekisbusy\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-bootstrap4';
    
    public $css = [
        YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
    ];
    
    public $js = [
        YII_ENV_DEV ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
    ];
    
    public $depends = [
        'derekisbusy\popper\PopperAsset'
    ];
}