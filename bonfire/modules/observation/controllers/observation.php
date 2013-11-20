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
		paginate($page, $this->observation_model, 5);
		Template::render();
	}

	public function search() {
		$query = $this->input->post('query');
		// No like() function, except the docs say there is too.
		//$records = $this->observation_model->like('observation_watershed', $query)->find_all();
		$records = $this->observation_model->find_all();
		Template::set('query', $query);
		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------
}