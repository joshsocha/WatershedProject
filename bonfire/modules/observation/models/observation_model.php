<?php if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

class Observation_model extends BF_Model
{

    protected $table = "observation";
    protected $key = "id";
    protected $soft_deletes = false;
    protected $date_format = "datetime";
    protected $set_created = true;
    protected $set_modified = true;
    protected $created_field = "created_on";
    protected $modified_field = "modified_on";

    public function get_approved_observations($limit, $page)
    {
      //  $query = $this->db->get_where('observation', array('approved' => 1));
       $this->db->limit($limit, $page);
        $query = $this->db->query ("SELECT * FROM bf_observation as o where o.approved=1");

        return $query;
    }
}
