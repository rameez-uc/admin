<?php

namespace yii\admin\controllers;
use yii\admin\models\PageUrl;

class PageurlController extends \yii\web\Controller
{
    public function actionCreate()
    {
    	$model = new PageUrl;

    	if (isset($_POST['PageUrl'])) {
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
