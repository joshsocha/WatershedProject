<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_survey extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'survey_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'survey_question' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'survey_active' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('survey');

        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ),
            'survey_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => FALSE,
            ),
            'survey_answer_text' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,

            ),
            'survey_answer_number' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => FALSE,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('survey_answers');

        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ),
            'survey_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => FALSE,
            ),
            'survey_answer_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => FALSE,
            ),
            'survey_votes' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => FALSE,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('survey_results');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('survey');
        $this->dbforge->drop_table('survey_answers');
        $this->dbforge->drop_table('survey_results');

	}

	//--------------------------------------------------------------------

}