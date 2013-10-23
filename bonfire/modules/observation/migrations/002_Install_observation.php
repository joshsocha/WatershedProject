<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_observation extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		// Table "observation"
		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'observation_description' => array(
				'type' => 'TEXT',
				
			),
			'observation_observation_date' => array(
				'type' => 'datetime',
				'default' => '0000-00-00',
				
			),
			'observation_waterbody' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_watershed' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_sate_muni' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_location_long' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_location_lat' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_water_speed' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_water_movement' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_fish_presence' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_rep_amph_present' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_fish_types' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_tree_shade' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_left_bank' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_right_bank' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_pipes' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_pipe_secretion' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_trash' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_comments' => array(
				'type' => 'VARCHAR',
				'constraint' => 50
			),
			'observation_anonymous' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				
			),
			'deleted' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'default' => '0',
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

		// Table "observation_algae"
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_not_present' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_present_in_spots' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_attached_to_rocks' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_everywhere' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_floating' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_matted_on_the_streambed' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_algae');


		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_light_green' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_dark_green' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_brown' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_red' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'algae_orange' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'created_on' => array(
				'type' => "DATE",
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => "DATE",
				'default' => '0000-00-00'
			)
  		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_algae_color');

		// Table: observation_barriers
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'barriers_dams' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'barriers_bridges' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'barriers_woody_debris' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'barriers_waterfalls' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_barriers');
	  
		// Table: observation_color
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'color_clear' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_oily' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_black' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_foamy' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_green' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_muddy' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_brown' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'color_other' => array(
				'type' => 'INT',
				'constraint' => (11)
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_color');

		// Table: observation_composition
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_sand' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_gravel' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_boulders' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_silt' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_other' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'composition_man_made_cement' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_composition');

		// Table: observation_land_use
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_farming' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_forest' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_residential' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_poultry_swine' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_pasture' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_stores' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_mining' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_construction' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_factories' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'land_logging' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_land_use');

		// Table: observation_material
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_sand' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_gravel' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_boulders' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_bedrock' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_silt' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'material_other' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_material');

		// Table: observation_smell
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_no_odor' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_rotten_egg' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_gasoline_oil' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_chemical' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_chlorine' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_sewage' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_rotting' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'smell_fishy' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_smell');

		// Table: observation_stream_use
		$fields = array(
			'observation_id' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_drinking' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_recreation' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_swimming' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_fishing' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_industrial' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_agriculture' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_irrigation' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'stream_livestock' => array(
				'type' => 'INT',
				'constraint' => (11)
			),
			'created_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			),
			'modified_on' => array(
				'type' => 'DATE',
				'default' => '0000-00-00'
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('observation_id', true);
		$this->dbforge->create_table('observation_stream_use');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('observation');
		$this->dbforge->drop_table('observation_algae');
		$this->dbforge->drop_table('observation_algae_color');
		$this->dbforge->drop_table('observation_barriers');
		$this->dbforge->drop_table('observation_color');
		$this->dbforge->drop_table('observation_composition');
		$this->dbforge->drop_table('observation_land_use');
		$this->dbforge->drop_table('observation_material');
		$this->dbforge->drop_table('observation_smell');
		$this->dbforge->drop_table('observation_stream_use');

	}

	//--------------------------------------------------------------------

}