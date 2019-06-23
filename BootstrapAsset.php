<?php
namespace derekisbusy\bootstrap4;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/bootstrap4';
    
    public $css = [
        'css/bootstrap.min.css',
    ];
    
    public $js = [
        'js/bootstrap.min.js',
    ];
    
    public $depends = [
        'derekisbusy\popper\PopperAsset'
    ];
}