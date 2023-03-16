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
$question1_arry = ["80", "22", "20", "21"];
$question2_arry = ["PHP", "Python", "JAVA", "HTML"];
$question3_arry = ["join", "select", "insert", "update"];
			
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correctAns1 = $question1_arry[0];
$correctAns2 = $question2_arry[3];
$correctAns3 = $question3_arry[1];
?>

<body>
	<!--フォームの作成 通信はPOST通信で-->
	<!--③ 問題のradioボタンを「foreach」を使って作成する-->
	<p>お疲れ様です<?php echo $name; ?>さん</p>
	<h2>①ネットワークのポート番号は何番？</h2>
	<form action="answer2.php" method="post">
		<?php
	    foreach ($question1_arry as $value1) { ?>
		<input type="radio" name="Ans1"
			value="<?php echo $value1;?>">
		<?php echo $value1;
	    }?>
		<br>
		<h2>②Webページを作成するための言語は？</h2>
		<?php
	    foreach ($question2_arry as $value2) { ?>
		<input type="radio" name="Ans2"
			value="<?php echo $value2;?>">
		<?php echo $value2;
	    }?>
		<br>
		<h2>③MySQLで情報を取得するためのコマンドは？</h2>
		<?php
	    foreach ($question3_arry as $value3) { ?>
		<input type="radio" name="Ans3"
			value="<?php echo $value3;?>">
		<?php echo $value3;
	    }?>
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