<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Update_survey extends Migration {

    public function up()
    {
        $prefix = $this->db->dbprefix;
        $this->dbforge->drop_table('survey');

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
                'default'=>0,

            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('survey');

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