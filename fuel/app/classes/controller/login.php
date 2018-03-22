<?php

class Controller_Login extends \Controller
{
	protected $service;

	public function __construct(){
		$this->service = new \Service\Users;
		return;
	}

	//ログイン画面表示
	public function action_index(){
		$view = View::forge('bootstrap/font/layout.php');
		$view->body = view::forge('login.php');
		$view->title = 'target';

		return $view;
	}

	//post -> $users[]へ
	public function login_set(){
		global $_POST;
		$users = array();
		$users['email'] = $_POST['email'];
		$users['password'] = $_POST['password'];

		return $users;
	}

	//DB登録処理
	public function action_resist(){
		$users = $this->login_set();
		//$service = new Users;
		$this->service->user_resist($users);
	}

	public function action_find(){
		$data = $this->service->user_find();
		var_dump($data);
	}
}
