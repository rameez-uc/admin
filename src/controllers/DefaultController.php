<?php

namespace yii\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function beforeAction($action)
    {
        // Yii::$app->response->format = Response::FORMAT_HTML;
        return parent::beforeAction($action);
    }
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	// echo "string";exit;
        return $this->render('index');
    }
}
