<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Greg
 * Date: 9/14/13
 * Time: 12:05 PM
 * To change this template use File | Settings | File Templates.
 */

class help extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Help';
        $data['active'] = 'help';
        $this->load->view('head_full',$data);
        $this->load->view('help');
        $this->load->view('tail_full');
    }

}