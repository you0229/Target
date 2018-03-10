<?php
use \Service\Users;

class Controller_Login extends \Controller
{
	public function action_index(){
		$view = View::forge('bootstrap/font/login.html');
		return $view;
	}

	public function login_set(){
		global $_POST;
		$users = array();
		$users['email'] = $_POST['email'];
		$users['password'] = $_POST['password'];

		return $users;
	}

	public function action_resist(){
		$users = $this->login_set();
		$service = new Users;
		$service->user_resist($users);
	}

}
