<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Greg
 * Date: 9/10/13
 * Time: 7:29 PM
 * To change this template use File | Settings | File Templates.
 */

class About extends CI_Controller
{

    public function index()
    {
        /*if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }*/

		$data['title'] = 'About';
        $data['active'] = 'about';

        $this->load->view('head_full', $data);
        $this->load->view('about/home');
        $this->load->view('tail_full');
    }
}