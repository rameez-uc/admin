<?php

namespace yii\admin\controllers;
use yii\web\Controller;

use yii\admin\models\Pages;
use yii\admin\components\BaseDal;
use yii\admin\components\PagesDal;

class PagesController extends PageBaseController
{	
    public function actionIndex()
    {
    	// $pages_dal = new PagesDal;
    	// if($pages_dal->create_page())
    	// 	echo "saved";

        return $this->render('index');
    }

}
