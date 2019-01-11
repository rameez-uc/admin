<?php

namespace app\modules\admin\controllers;
use yii\web\Controller;

use app\modules\admin\models\Pages;
use app\modules\admin\components\BaseDal;
use app\modules\admin\components\PagesDal;

class PagesController extends Controller
{
    public function actionIndex()
    {
    	// $pages_dal = new PagesDal;
    	// if($pages_dal->create_page())
    	// 	echo "saved";

        return $this->render('index');
    }

}
