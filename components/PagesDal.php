<?php

/**
* 
*/
namespace app\modules\admin\components;
use Yii;
use app\modules\admin\models\Pages;

class PagesDAL extends BaseDAL 
{
	protected $page_model_obj = null;

	protected $page_name = null;
	protected $page_slug = null;
	protected $meta_title = null;
	protected $meta_description = null;
	protected $body_class = null;
	protected $status = null;

	public function __construct(){
		$this->page_name = 'rzee';
		$this->page_slug = 'rzee';
		$this->meta_title = 'rzee';
		$this->meta_description = 'rzee';
		$this->body_class = 'rzee';
		$this->status = 'punlished';
	}

	public function create_page(){
		$this->page_model_obj = new Pages;

		$this->load_to_yii_model($this->page_model_obj);
		if(!$this->page_model_obj->save()){
			// Logs::info('Error Signup'. json_encode($this->page_model_obj->getErrors()), 'signup_form');
			echo "<pre>";
			print_r($this->page_model_obj->getErrors());
			return false;
		}

		return true;
	}
}