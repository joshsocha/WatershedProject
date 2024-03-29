<?php if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

class observation extends Front_Controller
{

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
        //Set permissions for Intermediate user:
        $role_id = $this->auth->role_id();
        $role_name = $this->auth->role_name_by_id($role_id);

        if($role_name=='Intermediate'||empty($role_name))
        {
            paginate_approved($page, $this->observation_model, 5);
        }
        else
        {
            paginate($page, $this->observation_model, 5);
        }
        Template::render();
    }

    public function search()
    {
        $query = trim($this->input->post('query'));
        // No like() function, except the docs say there is too.
        $fields = array('observation_watershed' => $query,
                        'observation_waterbody' => $query,
                        'observation_sate_muni' => $query,
                        'observation_comments'  => $query);
        $records = $this->observation_model->like($fields, $query)->find_all();
        //$records = $this->observation_model->find_all();
        Template::set('query', $query);
        Template::set('records', $records);
        Template::render();
    }


}