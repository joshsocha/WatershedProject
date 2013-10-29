<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 10/28/13
 * Time: 8:41 PM
 */

class Survey_Results_Model extends BF_Model {

    protected $table		= "survey_results";
    protected $key			= "id";
    protected $soft_deletes	= false;
    protected $date_format	= "datetime";
    protected $set_created	= false;
    protected $set_modified = false;

} 