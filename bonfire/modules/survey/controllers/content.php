<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Survey.Content.View');
		$this->load->model('survey_model', null, true);
		$this->lang->load('survey');
		
		Template::set_block('sub_nav', 'content/_sub_nav');
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
					$result = $this->survey_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('survey_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('survey_delete_failure') . $this->survey_model->error, 'error');
				}
			}
		}

		$records = $this->survey_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Survey');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Survey object.
	*/
	public function create()
	{
		$this->auth->restrict('Survey.Content.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_survey())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('survey_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'survey');

				Template::set_message(lang('survey_create_success'), 'success');
				Template::redirect(SITE_AREA .'/content/survey');
			}
			else
			{
				Template::set_message(lang('survey_create_failure') . $this->survey_model->error, 'error');
			}
		}
		Assets::add_module_js('survey', 'survey.js');

		Template::set('toolbar_title', lang('survey_create') . ' Survey');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Survey data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('survey_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/survey');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Survey.Content.Edit');

			if ($this->save_survey('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('survey_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'survey');

				Template::set_message(lang('survey_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('survey_edit_failure') . $this->survey_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Survey.Content.Delete');

			if ($this->survey_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('survey_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'survey');

				Template::set_message(lang('survey_delete_success'), 'success');

				redirect(SITE_AREA .'/content/survey');
			} else
			{
				Template::set_message(lang('survey_delete_failure') . $this->survey_model->error, 'error');
			}
		}
		Template::set('survey', $this->survey_model->find($id));
		Assets::add_module_js('survey', 'survey.js');

		Template::set('toolbar_title', lang('survey_edit') . ' Survey');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_survey()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_survey($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('survey_poll_name','Survey Name','required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('survey_question','Question','required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('survey_active','Active','required|xss_clean|max_length[1]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['survey_poll_name']        = $this->input->post('survey_poll_name');
		$data['survey_question']        = $this->input->post('survey_question');
		$data['survey_active']        = $this->input->post('survey_active');

		if ($type == 'insert')
		{
			$id = $this->survey_model->insert($data);

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
			$return = $this->survey_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}