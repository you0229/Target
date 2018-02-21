<?php
class Controller_Login extends Controller
{
	public function action_set(){
		$new = new Model_users();
		$new->email = 'something';
		$new->password = '>password';
		$new->save();
	}
}
