<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_observation extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'observation_observation_date' => array(
				'type' => 'DATETIME',
				'default' => '0000-00-00 00:00:00',
				
			),
			'observation_waterbody' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_watershed' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_sate_muni' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_location_long' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_location_lat' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_water_speed' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_water_movement' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_fish_presence' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_rep_amph_present' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_fish_types' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_tree_shade' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_left_bank' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_right_bank' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_pipes' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_pipe_secretion' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_trash' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'observation_comments' => array(
				'type' => 'VARCHAR',
				'constraint' => 1000,
				
			),
			'created_on' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
			'modified_on' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('observation');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('observation');

	}

	//--------------------------------------------------------------------

}