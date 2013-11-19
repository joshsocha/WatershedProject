<?php if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

class Survey_model extends BF_Model
{

    protected $table = "survey";
    protected $key = "id";
    protected $soft_deletes = false;
    protected $date_format = "datetime";
    protected $set_created = false;
    protected $set_modified = false;

    public function update_active($id)
    {
        $this->load->model('survey_model', null, true);

        $query = $this->db->get('survey');
        $surveys =  $query->result_array();
        foreach($surveys as $survey)
        {
            if($survey['id']!=$id)
            {
                $survey['survey_active'] = 0;
                $this->db->where('id', $survey['id']);
                $this->db->update('survey', $survey);
            }
        }
    }
}
