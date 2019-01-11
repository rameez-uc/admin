<?php

namespace app\modules\admin\controllers;
use yii\web\Controller;

class PageBaseController extends Controller
{
	public function __construct(){

		parent::__construct($this, 'admin');
	}

	public function init()
    {
        parent::init();
    }

    public function beforeAction($action)
	{
		return parent::beforeAction($action);
	}

}