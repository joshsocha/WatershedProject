<?php

/**
 * organizations short summary.
 *
 * organizations description.
 *
 * @version 1.0
 * @author jjsocha
 */
class organizations extends CI_Controller
{
public function index()
    {
        $data['title'] = 'Organizations';
        $data['active'] = 'organizations';

        $this->load->view('head_full', $data);
        $this->load->view('organizations/home');
        $this->load->view('tail_full');
     }
}