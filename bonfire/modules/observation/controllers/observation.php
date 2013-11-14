<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class observation extends Front_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('observation_model', null, true);
		$this->load->model('Color_model', null, true);
		$this->lang->load('observation');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index($page = 1)
	{
		if($page < 1) $page = 1;

		$pageSize = 5;

		$full    = $this->observation_model->find_all();
		if($page > count($full)/$pageSize) {
			$page = ceil(count($full) / $pageSize);
		}
		$records = $this->observation_model->limit($pageSize, ($page-1)*$pageSize)->find_all();

		Template::set("curpage", $page);
		Template::set('numpages', count($full) / $pageSize);
		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------




}