<?php
namespace Service;

class Users
{
	public function user_resist($users){
		$new = new \Model_users();
		$new->email = $users['email'];
		$new->password = $users['password'];
		$new->save();
		echo "set";
	}
}
