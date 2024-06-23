<?php
class Migration_Create_tbl_task extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'task_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'task_description' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
			'task_date' => array(
				'type' => 'DATETIME',
			),
			'task_is_finished' => array(
				'type' => 'BOOLEAN',
				'default' => FALSE,
			)
		));

		$this->dbforge->add_key('task_id', TRUE);

		$this->dbforge->create_table('tasks');
	}

	public function down()
	{
		$this->dbforge->drop_table('tasks');
	}
}
