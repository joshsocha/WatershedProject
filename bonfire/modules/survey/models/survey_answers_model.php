<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 10/28/13
 * Time: 7:13 PM
 */

class Survey_Answers_Model extends BF_Model{

    protected $table		= "survey_answers";
    protected $key			= "id";
    protected $soft_deletes	= false;
    protected $date_format	= "datetime";
    protected $set_created	= false;
    protected $set_modified = false;

    public function getSurveyAnswersBySurveyID($intSurveyID)
    {
        $query = $this->db->get_where('survey_answers', array('survey_id' => $intSurveyID) );
        return $query->result_array();
    }

} 