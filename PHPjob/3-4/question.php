<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>3章チェックテスト_question</title>
	<link rel="stylesheet" href="style.css">
</head>

<?php
	//POST送信で送られてきた名前を受け取って変数を作成
	$name = $_POST['name'];

	//①画像を参考に問題文の選択肢の配列を作成してください。
	$q1 = ["80", "22", "20", "21"];
	$q2 = ["PHP", "Python", "JAVA", "HTML"];
	$q3 = ["join", "select", "insert", "update"];

	//② ①で作成した、配列から正解の選択肢の変数を作成してください
	$correctAns1 = $q1[0];
	$correctAns2 = $q2[3];
	$correctAns3 = $q3[1];
?>

<body>
	<!--フォームの作成 通信はPOST通信で-->
	<!--③ 問題のradioボタンを「foreach」を使って作成する-->
	<p>お疲れ様です<?php echo $name; ?>さん</p>
	<form action="answer.php" method="post">
		<h2>①ネットワークのポート番号は何番？</h2>
		<?php foreach ($q1 as $value1) { ?>
			<input type="radio" name="Ans1" value="<?php echo $value1;?>">
			<?php echo $value1; ?>
    <?php } ?>
		<br>
		<h2>②Webページを作成するための言語は？</h2>
		<?php foreach ($q2 as $value2) { ?>
			<input type="radio" name="Ans2" value="<?php echo $value2;?>">
			<?php echo $value2; ?>
    <?php } ?>
		<br>
		<h2>③MySQLで情報を取得するためのコマンドは？</h2>
		<?php foreach ($q3 as $value3) { ?>
			<input type="radio" name="Ans3" value="<?php echo $value3;?>">
			<?php echo $value3; ?>
    <?php } ?>
		<br>

		<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
		<input type="hidden" name="name"
			value="<?php echo $name; ?>" />
		<input type="hidden" name="correctAns1"
			value="<?php echo $correctAns1; ?>" />
		<input type="hidden" name="correctAns2"
			value="<?php echo $correctAns2; ?>" />
		<input type="hidden" name="correctAns3"
			value="<?php echo $correctAns3; ?>" />
		<input type="submit" value="回答する" />
	</form>

</body>
</html>