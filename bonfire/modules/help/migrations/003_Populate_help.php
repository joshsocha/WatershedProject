<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Populate_help extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$this->db->insert("bf_help", array(
			"id" => 1,
			"help_title" => "Help",
			"help_text" => "Welcome to the help page! If you are new here, please take the site tour. For any other questions, see the FAQs.",
			"help_type" => "head"
		));

		$this->db->insert("bf_help", array(
			"id" => 2,
			"help_title" => "How can I start reporting about watersheds near me?",
			"help_text" => "In order to submit observations, you must be a registered user. Registration is free, just click the Sign Up link in the top right corner.",
			"help_type" => "FAQ"
		));

		$this->db->insert("bf_help", array(
			"id" => 3,
			"help_title" => "How do I become a trusted user?",
			"help_text" => "In order to become a trusted user  you must have 15 of your observations approved by an trusted user.",
			"help_type" => "FAQ"
		));
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->db->where("id <", 4)->delete("bf_help");
	}

	//--------------------------------------------------------------------

}