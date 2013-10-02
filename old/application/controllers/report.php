<?php

class report extends CI_Controller
{
public function index()
    {
        $data['title'] = 'Report';
        $data['active'] = 'report';

        $this->load->view('head_full', $data);
        $this->load->view('report/home');
        $this->load->view('tail_full');
     }
}