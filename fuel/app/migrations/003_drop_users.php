<?php

namespace Fuel\Migrations;

class Drop_users
{
	public function up()
	{
		\DBUtil::drop_table('users');
	}

	public function down()
	{
		\DBUtil::create_table('users', array(
			'id' => array('type' => 'int', 'null' => true, 'constraint' => 11, 'auto_increment' => true),
			'email' => array('type' => 'varchar', 'null' => true, 'constraint' => 50),
			'password' => array('type' => 'varchar', 'null' => true, 'constraint' => 125),
			'created_at' => array('type' => 'timestamp', 'null' => true),
			'updated_at' => array('type' => 'timestamp', 'null' => true),
			'deleted_at' => array('type' => 'timestamp', 'null' => true),

		), array('id'));

	}
}