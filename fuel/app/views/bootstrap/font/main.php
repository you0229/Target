<h1>ログイン完了</h1>
<form action = "" method = "post">
	<dl>
		<dt>メールアドレス</dt>
		<dd>
			<?php echo htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES, 'UTF-8'); ?>
		</dd>
		<dt>パスワード</dt>
		<dd>
			*******
		</dd>
	</dl>
	<div>
</form>
