<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 10/28/13
 * Time: 7:13 PM
 */

class Survey_Questions_Model extends BF_Model{

    protected $table		= "survey_questions";
    protected $key			= "id";
    protected $soft_deletes	= false;
    protected $date_format	= "datetime";
    protected $set_created	= false;
    protected $set_modified = false;

} 