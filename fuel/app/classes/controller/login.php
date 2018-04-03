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
		$view->body = view::forge('bootstrap/font/login.php');
		$view->title = 'target';

		return $view;
	}

	//新規登録画面表示
	public function action_regist(){
		$view = View::forge('bootstrap/font/layout.php');
		$view->body = view::forge('bootstrap/font/regist.php');
		$view->title = 'target';

		return $view;
	}

	//post -> $users[]へ
	public function login_set(){
		// global $_POST;
		// $users = array();
		// $users['email'] = $_POST['email'];
		// $users['password'] = $_POST['password'];
		session_start();
		$users = [];
		$users = $_SESSION['join'];

		return $users;
	}

	//DB登録処理
	public function action_resist(){
		$users = $this->login_set();
		$this->service->user_resist($users);
	}

	//check画面表示
	public function action_check(){
		if(!empty($_POST)){
			if($_POST['email'] == ''){
				$errors['email'] = 'non';
			}
			if($_POST['password'] == ''){
				$errors['password'] = 'non';
			}

			if(empty($errors)){
				$_SESSION['join'] = $_POST;

				$view = View::forge('bootstrap/font/layout.php');
				$view->body = view::forge('bootstrap/font/check.php');
				$view->title = 'target';

				return $view;
			}
		}
			// $view = View::forge('bootstrap/font/layout.php');
			// $view->body = view::forge('bootstrap/font/check.php');
			// $view->title = 'target';
			//
			// return $view;
	}

	//dbに登録を行ってthanksページへ移動
	public function action_thanks(){
		// if(!isset($_SESSION['join'])){
		// 	header('location: /login');
		// 	exit;
		// }

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$users = $this->login_set();
			$this->service->user_resist($users);
			$datas['datas'] = $this->service->user_find();

			$view = View::forge('bootstrap/font/layout.php');
			$view->body = view::forge('bootstrap/font/thanks.php', $datas);
			$view->title = 'target';

			return $view;
		}
	}
	
	//dbからemailを検索
	public function email_s(){
		$email = "yuya2@yuya";
		$datas = $this->service->email_s($email);
		var_dump($datas);
	}

	public function action_login(){
		$errors = "";

		if(empty($_POST['login'])){
			if(empty($_POST['email'])){
				$errors['email'] = "email empty";
			}
			if(empty($_POST['password'])){
					$errors['password'] = "password empty";
			}

			if (!empty($_POST["email"]) && !empty($_POST["password"])){
				$email = $_POST['email'];
				$password = $_POST['password'];

				try {
					$row = $this->service->email_s($email);
					if($password == $row['password']) {
						echo "ok";
					}
				}
				catch (PDOException $e) {
					$errorMessage = 'データベースエラー';
				}
			}
		}
	}
}
