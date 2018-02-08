<?php
class Controller_Login extends Controller
{
	public function action_index(){
		return View::forge('login/index');
	}
}
