<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Greg
 * Date: 9/10/13
 * Time: 7:29 PM
 * To change this template use File | Settings | File Templates.
 */

class Home extends CI_Controller
{

    public function index()
    {
        /*if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }*/



        $this->load->view('head_full');
        $this->load->view('home/home');
        $this->load->view('tail_full');
    }
}