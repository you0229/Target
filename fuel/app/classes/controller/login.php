<?php
class Controller_Login extends Controller
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

	public function resist(){
		$this->login_set();
		$service = new Service_users;
		$service->user_resist;
	}

}
