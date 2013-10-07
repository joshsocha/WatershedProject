<?php

class report extends CI_Controller
{
	public function index()
    {
        $data['title'] = 'Report';
        $data['active'] = 'report';
        $data['observationId'] = 0;

        $data['extra_js'][] = '<script type="text/javascript" src="'.base_url().'/application/assets/js/bootstrap-datepicker.js"></script>';
        $data['extra_js'][] = '<script type="text/javascript">$("#inputDate").datepicker({format : "yyyy-mm-dd"});</script>';

        $data['extra_css'][] = '<link rel="stylesheet" type="text/css" href="'.base_url().'/application/assets/css/datepicker.css" />';

        $this->load->view('head_full', $data);
        $this->load->view('report/home');
        $this->load->view('tail_full');
     }

     public function edit($id)
     {
     	$data['title'] = 'Report';
        $data['active'] = 'report';


        $this->load->view('head_full', $data);
        $this->load->view('report/home');
        $this->load->view('tail_full');  	
     }

     public function submit()
    {
    	if($this->input->post('observationId') == 0)
    	{
    	$toInsert = array(
			'anonymous' => $this->input->post('inputAnonymous'),
			'created_by' => 1,
			'created_date' => date("Y-m-d H:i:s"),
			'description' => $this->input->post('inputDescription'),
			'location' => $this->input->post('inputLocation'),
			'observation_date' => $this->input->post('inputDate'),
			'updated_by' => 1,
			'updated_date' => date("Y-m-d H:i:s"));
		$this->db->insert('health_observations', $toInsert);
		}
    	redirect('/report', 'refresh');
    } 
}