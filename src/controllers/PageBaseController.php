<?php

namespace yii\admin\controllers;
use yii\web\Controller;

class PageBaseController extends Controller
{

	public function init()
    {
    	
        parent::init();
    }

    public function beforeAction($action)
	{
		return parent::beforeAction($action);
	}

}