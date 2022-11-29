<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5章チェック課題 | ログアウト</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="main">
		<div class=topWrap>
			<h2>ログアウト画面</h2>
		</div>
		<p>ログアウトしました</p>
	</main>
</body>

</html>