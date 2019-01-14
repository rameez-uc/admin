<?php

namespace yii\admin;

use yii\web\AssetBundle;

class SiteCoreAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';

    public $sourcePath = '@yii/admin/assets'; 

    public $css = [
        'core-style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}