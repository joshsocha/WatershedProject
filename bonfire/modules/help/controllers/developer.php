<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class developer extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Help.Developer.View');
		$this->load->model('help_model', null, true);
		$this->lang->load('help');
		
		Template::set_block('sub_nav', 'developer/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->help_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('help_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('help_delete_failure') . $this->help_model->error, 'error');
				}
			}
		}

		$records = $this->help_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Help');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Help object.
	*/
	public function create()
	{
		$this->auth->restrict('Help.Developer.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_help())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('help_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'help');

				Template::set_message(lang('help_create_success'), 'success');
				Template::redirect(SITE_AREA .'/developer/help');
			}
			else
			{
				Template::set_message(lang('help_create_failure') . $this->help_model->error, 'error');
			}
		}
		Assets::add_module_js('help', 'help.js');

		Template::set('toolbar_title', lang('help_create') . ' Help');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Help data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('help_invalid_id'), 'error');
			redirect(SITE_AREA .'/developer/help');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Help.Developer.Edit');

			if ($this->save_help('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('help_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'help');

				Template::set_message(lang('help_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('help_edit_failure') . $this->help_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Help.Developer.Delete');

			if ($this->help_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('help_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'help');

				Template::set_message(lang('help_delete_success'), 'success');

				redirect(SITE_AREA .'/developer/help');
			} else
			{
				Template::set_message(lang('help_delete_failure') . $this->help_model->error, 'error');
			}
		}
		Template::set('help', $this->help_model->find($id));
		Assets::add_module_js('help', 'help.js');

		Template::set('toolbar_title', lang('help_edit') . ' Help');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_help()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_help($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('help_title','Title','required|xss_clean|max_length[1000]');
		$this->form_validation->set_rules('help_text','Text','required|xss_clean|max_length[1000]');
		$this->form_validation->set_rules('help_type','Type','required|xss_clean|max_length[25]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['help_title']        = $this->input->post('help_title');
		$data['help_text']        = $this->input->post('help_text');
		$data['help_type']        = $this->input->post('help_type');

		if ($type == 'insert')
		{
			$id = $this->help_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			} else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			$return = $this->help_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}