<form action = "/login/thanks" method = "post">
	<dl>
		<dt>メールアドレス</dt>
		<dd>
			<?php echo htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES, 'UTF-8'); ?>
		</dd>
		<dt>パスワード</dt>
		<dd>
			<?php echo htmlspecialchars($_SESSION['join']['password'], ENT_QUOTES, 'UTF-8'); ?>
		</dd>
	</dl>
	<div><a href = "index.php?action = rewrite">&laquo;&nbsp;書き直す</a>
	<input type = "submit" value = "登録する"></div>
	</form>
