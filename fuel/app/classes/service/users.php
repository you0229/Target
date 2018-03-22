<?php
namespace Service;

class Users
{
	protected $new;

	//プロパティにテーブルを設定
	public function __construct(){
		$this->new = new \Model_users();
	}

	//DBに登録
	public function user_resist($users){
		//$new = new \Model_users();
		$new = $this->new;
		$new->email = $users['email'];
		$new->password = $users['password'];
		$new->save();
		echo "登録が登完了しました";

	}

	public function user_find(){
		$datas  = \Model_Users::find('all');

		return $datas;
	}
}
