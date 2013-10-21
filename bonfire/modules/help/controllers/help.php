<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Greg
 * Date: 10/17/13
 * Time: 5:52 PM
 * To change this template use File | Settings | File Templates.
 */

class help extends Front_Controller {

    public function __construct()
    {
        parent::__construct();

        Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
        Assets::add_js('jquery-ui-1.8.13.min.js');
    }

    public function index()
    {
        Template::render();
    }

}