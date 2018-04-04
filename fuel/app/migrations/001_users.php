<?php
namespace Fuel\Migrations;

class users
{
	function up()
    {
		\DBUtil::create_table(
			'users', 
			array(
				'id' => array('constraint' => 11, 'type' =>'int', 'auto_increment' => true), 
				'email' => array('constraint' => 50, 'type' => 'varchar', 'unique' => true), 
				'password' => array('constraint' => 125, 'type' => 'varchar'), 
				'created_at' => array('type' => 'timestamp', 'null' => true),
				'updated_at' => array('type' => 'timestamp', 'null' => true),
				'deleted_at' => array('type' => 'timestamp', 'null' => true),
			), 
			array('id')
		);
	}

	function down()
	{
		\DBUtil::drop_table('users');
	}
}
