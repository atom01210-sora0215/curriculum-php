<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>3章チェックテスト_answer</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
		//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
		$name = $_POST['name'];
    // 回答
    $answer[0] = $_POST['answer1'];
    $answer[1] = $_POST['answer2'];
    $answer[2] = $_POST['answer3'];

    // '@'で圧縮した文字列を、配列にもどす。
    $correct_all = $_POST['correct_all'];
    $correct = explode("@",$correct_all);

		//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function scoreOut($k) {
        global $answer , $correct;
        $a = $answer[$k];
        $b = $correct[$k];
        $flag = strcmp($a,$b);
        if ($flag === 0) {
            echo "正解！";
        } elseif ($flag !== 0) {
            echo "残念・・・";
        }
    }
	?>

	<p> <?php echo $name; ?>さんの結果は・・・？</p>
	<p>①の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
	<?php scoreOut(0); ?>

	<p>②の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
	<?php scoreOut(1); ?>

	<p>③の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
	<?php scoreOut(2); ?>
</body>

</html>