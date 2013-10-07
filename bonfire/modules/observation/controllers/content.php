<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Observation.Content.View');
		$this->load->model('observation_model', null, true);
		$this->lang->load('observation');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
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
					$result = $this->observation_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('observation_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('observation_delete_failure') . $this->observation_model->error, 'error');
				}
			}
		}

		$records = $this->observation_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Observation');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Observation object.
	*/
	public function create()
	{
		$this->auth->restrict('Observation.Content.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_observation())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('observation_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'observation');

				Template::set_message(lang('observation_create_success'), 'success');
				Template::redirect(SITE_AREA .'/content/observation');
			}
			else
			{
				Template::set_message(lang('observation_create_failure') . $this->observation_model->error, 'error');
			}
		}
		Assets::add_module_js('observation', 'observation.js');

		Template::set('toolbar_title', lang('observation_create') . ' Observation');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Observation data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('observation_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/observation');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Observation.Content.Edit');

			if ($this->save_observation('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('observation_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'observation');

				Template::set_message(lang('observation_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('observation_edit_failure') . $this->observation_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Observation.Content.Delete');

			if ($this->observation_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('observation_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'observation');

				Template::set_message(lang('observation_delete_success'), 'success');

				redirect(SITE_AREA .'/content/observation');
			} else
			{
				Template::set_message(lang('observation_delete_failure') . $this->observation_model->error, 'error');
			}
		}
		Template::set('observation', $this->observation_model->find($id));
		Assets::add_module_js('observation', 'observation.js');

		Template::set('toolbar_title', lang('observation_edit') . ' Observation');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_observation()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_observation($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('observation_description','Description','required|xss_clean|max_length[4096]');
		$this->form_validation->set_rules('observation_obs_date','Observation Date','required|trim|xss_clean');
		$this->form_validation->set_rules('observation_obs_location','Location of Observation','required|trim|xss_clean|max_length[150]');
		$this->form_validation->set_rules('observation_anonymous','Remain Anonymous','max_length[1]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['observation_description']        = $this->input->post('observation_description');
		$data['observation_obs_date']        = $this->input->post('observation_obs_date') ? $this->input->post('observation_obs_date') : '0000-00-00';
		$data['observation_obs_location']        = $this->input->post('observation_obs_location');
		$data['observation_anonymous']        = $this->input->post('observation_anonymous');

		if ($type == 'insert')
		{
			$id = $this->observation_model->insert($data);

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
			$return = $this->observation_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}