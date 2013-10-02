<?php

class Learn extends CI_Controller
{

    public function index()
    {
        /*if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }*/

        $data['title'] = 'Learn';
        $data['active'] = 'learn';

        $this->load->view('head_full', $data);
        $this->load->view('learn/home');
        $this->load->view('tail_full');
    }
}