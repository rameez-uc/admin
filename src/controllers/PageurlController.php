<?php

namespace yii\admin\controllers;
use Yii;
use yii\admin\models\PageUrl;
use yii\admin\components\BaseDAL;
use yii\admin\components\PagesDAL;

class PageurlController extends \yii\web\Controller
{
    public function actionCreate()
    {
    	$model = new PageUrl;

    	if (isset($_POST['PageUrl'])) {
    		// dumpx($_POST['PageUrl']);
    		$pages_dal = new PagesDAL;
    		$pages_dal->set_data($_POST['PageUrl']);
    		$pages_dal->create_page();

    		exit;
			$model->attributes=$_POST['PageUrl'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

        return $this->render('create', ['model' => $model]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
