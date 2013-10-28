<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_help extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'help_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 1000,
				
			),
			'help_text' => array(
				'type' => 'VARCHAR',
				'constraint' => 1000,
				
			),
			'help_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
				
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('help');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('help');

	}

	//--------------------------------------------------------------------

}