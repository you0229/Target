<?php
class Service_users
{
	public function set($email, $password){
		$new = new Model_users();
		$new->email = $email;
		$new->password = $password;
		$new->save();
	}
}
