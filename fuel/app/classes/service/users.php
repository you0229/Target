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
		$new = $this->new;
		$new->email = $users['email'];
		$new->password = $users['password'];
		$new->password = password_hash($users['password'], PASSWORD_DEFAULT);
		$new->save();
	}

	//dbからemailを取得
	public function user_find(){
		$datas = \Model_Users::find('all');
		$results  = [];
		foreach($datas as $data){
			$result  = [];
			$result['id']  = $data->id;
			$result['email'] = $data->email;
			$results[] = $result;
		}
		return $results;
		
 
	//	return "abc";
		/* $results = []; */
		// for($i = 0;$i<10;$i++) {
		// 	$results[$i] = $i;
		// }
		//
		// $results[0] = 'abc';
		// //$result[]  = 'def';
		// //for($i = 0;$i<10;$i++) {
		// //	$results[] = $i;
		//
		// for($i = 0;$i<10;$i++) {
		// 	$results[] = $i+$i;
		//
		// for($i = 0;$i<10;$i++) {
		// 	$a = $i+$i;
		// 	$b = $a-1;
		// 	$results[$a] = $b;
		//
		/* for($i = 0, $result = [];$i<10;$i++){ */
		/* 	$a = $i+$i;                          */
		/* 	$b = $a-1;                           */
		/* 	$result[$a] = $b;                    */
		/* }                                     */
		/* for($count = 0;$count<10;$count++){   */
		/* 	$results[] = $result;                */
		/* }                                     */
		/* return $results;                      */
	} 

	//dbからemailを検索
	public function email_s($email){
		$param = array('where' => array(array('email', $email)));
		$datas = \Model_Users::find('all', $param);
		foreach($datas as $data){
			$result  = [];
			$result['id']  = $data->id;
			$result['email'] = $data->email;
			$result['password'] = $data->password;
		}
		
		return $result;
	}
}
