<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2012, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends Front_Controller
{

 public function __construct()
    {
        parent::__construct();

        
        $this->lang->load('application');

       
    }

    /**
     * Displays the homepage of the Bonfire app
     *
     * @return void
     */
    public function index()
    {
	
	
        if ($this->session->flashdata('results'))
        {
			
            $this->session->set_flashdata('results', 'false');
            $survey_qry = $this->db->get_where('survey', array('survey_active' => 1));

            $surveys = $survey_qry->result_array();
            $records['survey_id'] = $surveys[0]['id'];

            $records['question'] = $surveys[0]['survey_question'];
            $records['survey_id'] = $surveys[0]['id'];

            $answers_qry = $this->db->get_where('survey_answers', array('survey_id' => $surveys[0]['id']));
            $answers = $answers_qry->result_array();

            $result_qry = $this->db->get_where('survey_results', array('survey_id' => $surveys[0]['id']));
            $results = $result_qry->result_array();

            $i=0;
            foreach($answers as $answer)
            {
                foreach($results as $result)
                {
                    if($result['survey_answer_id']==$answer['id'])
                    {

                        $records['results'][$i]=$answer['survey_answer_text'].': '.$result['survey_votes'].' votes';
                        var_dump($records['results']);
                        $i++;
                    }
                }
            }

            $records['display_results'] = true;
            Template::set('records', $records);

        } else
        {
            $this->load->helper('form');
            $survey_qry = $this->db->get_where('survey', array('survey_active' => 1));
            $surveys = $survey_qry->result_array();

            $records['question'] = $surveys[0]['survey_question'];
            $records['survey_id'] = $surveys[0]['id'];
            $answers_qry = $this->db->get_where('survey_answers', array('survey_id' => $surveys[0]['id']));
            $records['answers'] = $answers_qry->result_array();
            $records['display_results'] = false;
            Template::set('records', $records);
        }
		
        Template::render();
    }

    //end index()


    public function submit_survey($survey_id)
    {
        if (empty($_POST)) {
            Template::render();
        } else {
            $result_qry = $this->db->get_where('survey_results', array('survey_id' => $survey_id, 'survey_answer_id' => $_POST['answer']));
            $result = $result_qry->result_array();

            if (empty($result)) {
                $new_reuslt = array(
                    'survey_id' => $survey_id,
                    'survey_answer_id' => $_POST['answer'],
                    'survey_votes' => 1
                );
                $this->db->insert('survey_results', $new_reuslt);
            } else {
                var_dump($result[0]);
                $result[0]['survey_votes'] = $result[0]['survey_votes'] + 1;
                $result_id = $result[0]['id'];

                $this->db->where('id', $result_id);
                $this->db->update('survey_results', $result[0]);
            }

            $this->session->set_flashdata('results', 'true');
            redirect(site_url());
        }

    }

    //--------------------------------------------------------------------


}//end class