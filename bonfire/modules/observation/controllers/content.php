<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Observation.Content.View');
		$this->load->model('observation_model', null, true);
		$this->load->model('color_model', null, true);
		$this->load->model('smell_model', null, true);
		$this->load->model('composition_model', null, true);
		$this->load->model('materials_model', null, true);
		$this->load->model('algae_model', null, true);
		$this->load->model('algae_color_model', null, true);
		$this->load->model('land_model', null, true);
		$this->load->model('stream_model', null, true);
		$this->load->model('barrier_model', null, true);
		

		$this->lang->load('observation');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
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

		
		$this->form_validation->set_rules('observation_observation_date','Observation Date','required|trim|xss_clean');
		$this->form_validation->set_rules('observation_waterbody','Waterbody','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_watershed','Watershed','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_sate_muni','Sate and Municipality','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_location_long','Longitude','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_location_lat','Latitude','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_water_speed','Water Speed','required|trim|xss_clean|max_length[50]');
		
		$this->form_validation->set_rules('observation_water_movement','Water Movement','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_fish_presence','Fish Presence','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_rep_amph_present','Reptiles or Fish Present','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_fish_types','Fish Types','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_tree_shade','Tree Shade','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_left_bank','Left Bank','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_right_bank','Right Bank','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_pipes','Pipes Present','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_pipe_secretion','Pipe Secretion','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_trash','Trash','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('observation_comments','Comments','trim|xss_clean|max_length[1000]');

		
		$this->form_validation->set_rules('color_clear','Clear','trim|xss_clean|max_length[50]');

		
		
		
		
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['observation_observation_date']        = $this->input->post('observation_observation_date') ? $this->input->post('observation_observation_date') : '0000-00-00 00:00:00';
		$data['observation_waterbody']        = $this->input->post('observation_waterbody');
		$data['observation_watershed']        = $this->input->post('observation_watershed');
		$data['observation_sate_muni']        = $this->input->post('observation_sate_muni');
		$data['observation_location_long']        = $this->input->post('observation_location_long');
		$data['observation_location_lat']        = $this->input->post('observation_location_lat');
		$data['observation_water_speed']        = $this->input->post('observation_water_speed');
		$data['observation_water_movement']        = $this->input->post('observation_water_movement');
		$data['observation_fish_presence']        = $this->input->post('observation_fish_presence');
		$data['observation_rep_amph_present']        = $this->input->post('observation_rep_amph_present');
		$data['observation_fish_types']        = $this->input->post('observation_fish_types');
		$data['observation_tree_shade']        = $this->input->post('observation_tree_shade');
		$data['observation_left_bank']        = $this->input->post('observation_left_bank');
		$data['observation_right_bank']        = $this->input->post('observation_right_bank');
		$data['observation_pipes']        = $this->input->post('observation_pipes');
		$data['observation_pipe_secretion']        = $this->input->post('observation_pipe_secretion');
		$data['observation_trash']        = $this->input->post('observation_trash');
		$data['observation_comments']        = $this->input->post('observation_comments');
		
		
		
		$dataColor = array();
		$dataColor['color_clear']        = $this->input->post('color_clear');
		$dataColor['color_oily']        = $this->input->post('color_oily');
		$dataColor['color_black']        = $this->input->post('color_black');
		$dataColor['color_foamy']        = $this->input->post('color_foamy');
		$dataColor['color_green']        = $this->input->post('color_green');
		$dataColor['color_muddy']        = $this->input->post('color_muddy');
		$dataColor['color_brown']        = $this->input->post('color_brown');
		$dataColor['color_other']        = $this->input->post('color_other');
		
		$dataSmell = array();
		$dataSmell['smell_no_odor']        = $this->input->post('smell_no_odor');
		$dataSmell['smell_rotten_egg']        = $this->input->post('smell_rotten_egg');
		$dataSmell['smell_gasoline_oil']        = $this->input->post('smell_gasoline_oil');
		$dataSmell['smell_chemical']        = $this->input->post('smell_chemical');
		$dataSmell['smell_chlorine']        = $this->input->post('smell_chlorine');
		$dataSmell['smell_sewage']        = $this->input->post('smell_sewage');
		$dataSmell['smell_rotting']        = $this->input->post('smell_rotting');
		$dataSmell['smell_fishy']        = $this->input->post('smell_fishy');
		
		$dataComposition = array();
		$dataComposition['composition_sand']        = $this->input->post('composition_sand');
		$dataComposition['composition_gravel']        = $this->input->post('composition_gravel');
		$dataComposition['composition_boulders']        = $this->input->post('composition_boulders');
		$dataComposition['composition_silt']        = $this->input->post('composition_silt');
		$dataComposition['composition_other']        = $this->input->post('composition_other');
		$dataComposition['composition_man_made_cement']        = $this->input->post('composition_man_made_cement');
	
		$dataMaterial = array();
		$dataMaterial['material_sand']        = $this->input->post('material_sand');
		$dataMaterial['material_gravel']        = $this->input->post('material_gravel');
		$dataMaterial['material_boulders']        = $this->input->post('material_boulders');
		$dataMaterial['material_bedrock']        = $this->input->post('material_bedrock');
		$dataMaterial['material_silt']        = $this->input->post('material_silt');
		$dataMaterial['material_other']        = $this->input->post('material_other');
		
		
		$dataAlgae = array();
		$dataAlgae['algae_not_present']        = $this->input->post('algae_not_present');
		$dataAlgae['algae_present_in_spots']        = $this->input->post('algae_present_in_spots');
		$dataAlgae['algae_attached_to_rocks']        = $this->input->post('algae_attached_to_rocks');
		$dataAlgae['algae_everywhere']        = $this->input->post('algae_everywhere');
		$dataAlgae['algae_floating']        = $this->input->post('algae_floating');
		$dataAlgae['algae_matted_on_the_streambed']        = $this->input->post('algae_matted_on_the_streambed');

		
		$dataAlgaeColor = array();
		$dataAlgaeColor['algae_light_green']        = $this->input->post('algae_light_green');
		$dataAlgaeColor['algae_dark_green']        = $this->input->post('algae_dark_green');
		$dataAlgaeColor['algae_brown']        = $this->input->post('algae_brown');
		$dataAlgaeColor['algae_red']        = $this->input->post('algae_red');
		$dataAlgaeColor['algae_orange']        = $this->input->post('algae_orange');
		
		
		$dataLandUse = array();
		$dataLandUse['land_farming']        = $this->input->post('land_farming');
		$dataLandUse['land_forest']        = $this->input->post('land_forest');
		$dataLandUse['land_residential']        = $this->input->post('land_residential');
		$dataLandUse['land_poultry_swine']        = $this->input->post('poultry_swine');
		$dataLandUse['land_pasture']        = $this->input->post('land_pasture');
		$dataLandUse['land_stores']        = $this->input->post('land_stores');
		$dataLandUse['land_mining']        = $this->input->post('land_mining');
		$dataLandUse['land_construction']        = $this->input->post('land_construction');
		$dataLandUse['land_factories']        = $this->input->post('land_factories');
		$dataLandUse['land_logging']        = $this->input->post('land_logging');
		
		
		$dataStreamUse = array();
		$dataStreamUse['stream_drinking']        = $this->input->post('stream_drinking');
		$dataStreamUse['stream_recreation']        = $this->input->post('stream_recreation');
		$dataStreamUse['stream_swimming']        = $this->input->post('stream_swimming');
		$dataStreamUse['stream_fishing']        = $this->input->post('stream_fishing');
		$dataStreamUse['stream_industrial']        = $this->input->post('stream_industrial');
		$dataStreamUse['stream_agriculture']        = $this->input->post('stream_agriculture');
		$dataStreamUse['stream_irrigation']        = $this->input->post('ostream_irrigation');
		$dataStreamUse['stream_livestock']        = $this->input->post('stream_livestock');

		
		$dataBarriers = array();
		$dataBarriers['barriers_dams']        = $this->input->post('barriers_dams');
		$dataBarriers['barriers_bridges']        = $this->input->post('barriers_bridges');
		$dataBarriers['barriers_woody_debris']        = $this->input->post('barriers_woody_debris');
		$dataBarriers['barriers_waterfalls']        = $this->input->post('barriers_waterfalls');
		
		
		if ($type == 'insert')
		{
			$id = $this->observation_model->insert($data);
			
			$dataColor['observation_id'] = $id;
			$this->color_model->insert($dataColor);
			
			$dataSmell['observation_id'] = $id;
			$this->smell_model->insert($dataSmell);
			
			$dataComposition['observation_id'] = $id;
			$this->composition_model->insert($dataComposition);
			
			$dataMaterial['observation_id'] = $id;
			$this->materials_model->insert($dataMaterial);
			
			$dataAlgae['observation_id'] = $id;
			$this->algae_model->insert($dataAlgae);
			
			$dataAlgaeColor['observation_id'] = $id;
			$this->algae_color_model->insert($dataAlgaeColor);
			
			$dataLandUse['observation_id'] = $id;
			$this->land_model->insert($dataLandUse);
			
			$dataStreamUse['observation_id'] = $id;
			$this->stream_model->insert($dataStreamUse);

			$dataBarriers['observation_id'] = $id;
			$this->barrier_model->insert($dataBarriers);

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