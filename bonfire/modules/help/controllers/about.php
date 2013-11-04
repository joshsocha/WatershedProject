<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 10/23/13
 * Time: 5:08 PM
 */

class about extends Front_Controller
{

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

} 