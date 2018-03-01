<?php
class Controller_Login extends Controller
{
	public $email;
	public $password;
	
	public function action_set(){
		$this->email = $POST[email]
		$this->$password = $POST[password]
	}

	public function action_users(){
		$users = new Service_users;
		$users->set($this->email, $this->password);
	}
}
