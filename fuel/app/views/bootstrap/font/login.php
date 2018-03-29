<?php
session_start();

	if(!empty($_POST)){
		if($_POST['email'] == ''){
			$errors['email'] = 'non';
		}
		if($_POST['password'] == ''){
			$errors['password'] = 'non';
		}

		if(empty($errors)){
			$_SESSION['join'] = $_POST;
  			header('location: login/check');
			exit;
		}
	}
?>
    <h1>会員登録</h1>
    <form action = "" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">OK</button>
    </form>
