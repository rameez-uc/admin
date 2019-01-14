<?php

/**
* 
*/
namespace yii\admin\components;
use Yii;
// use yii\admin\components\BaseDAL;
// use yii\web\Component;
use yii\admin\models\PageUrl;

class PagesDAL extends BaseDAL 
{
	protected $page_model_obj = null;

	protected $tbl_sitemap_file_id = null;
    protected $url = null;
    protected $canonical_url = null;
    protected $meta_title = null;
    protected $meta_description = null;
    protected $meta_keywords = null;
    protected $sitemap_include = null;
    protected $sitemap_priority = null;
    protected $sitemap_changefreq = null;
    protected $no_follow = null;
    protected $no_index = null;
    protected $sitemap_last_updated_date = null;

    protected $created_date = null;
    protected $last_modified_date = null;

	public function __construct(){
	 //    $this->tbl_sitemap_file_id = '';
	 //    $this->url = '';
	 //    $this->canonical_url = '';
	 //    $this->meta_title = '';
	 //    $this->meta_description = '';
	 //    $this->meta_keywords = '';
	 //    $this->sitemap_include = '';
	 //    $this->sitemap_priority = '';
	 //    $this->sitemap_changefreq = '';
	 //    $this->sitemap_last_updated_date = '';
	 //    $this->no_follow = '';
	 //    $this->no_index = '';
		$this->created_date = current_date();
		$this->last_modified_date = current_date();
		$this->sitemap_last_updated_date = current_date();

		// $this->pages_path = Yii::getAlias('@app');
	}

	public function set_data($data){
		foreach($data as $field_name => $value){
			$this->{$field_name} = $value;
		}
	}

	public function create_page(){
		$this->page_model_obj = new PageUrl;

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