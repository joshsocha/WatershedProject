<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Composition_model extends BF_Model {

	protected $table		= "observation_composition";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= false;
	protected $set_modified = false;
}
