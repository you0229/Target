<h1>登録が完了しました</h1>
<h3>現在の登録者は</h3>
<?php
		foreach($datas as $val){
			echo "id:". $val['id']."<br />";
			echo "email:". $val['email']."<br />";
		}
 ?>
