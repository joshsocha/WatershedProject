<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class help extends Front_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('help_model', null, true);
		$this->lang->load('help');
		
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		$records = $this->help_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

    public function help()
    {

    }

	//--------------------------------------------------------------------




}