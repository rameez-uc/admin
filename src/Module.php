<?php

namespace yii\admin;

use Yii;
use yii\base\BootstrapInterface;
use yii\helpers\Json;
use yii\web\ForbiddenHttpException;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'yii\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {   
        $src_path = Yii::getAlias('@yii/admin');
        require_once($src_path.'/components/Utility.php');

        /*
        */
        $this->layoutPath = $src_path.'/views/layouts';
        $this->layout = 'main';

        parent::init();

        // custom initialization code goes here
    }
}
