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
    $Ans1 = $_POST['Ans1'];
    $Ans2 = $_POST['Ans2'];
    $Ans3 = $_POST['Ans3'];
    $correctAns1 = $_POST['correctAns1'];
    $correctAns2 = $_POST['correctAns2'];
    $correctAns3 = $_POST['correctAns3'];

    // echo $correctAns1.$correctAns2.$correctAns3.'<br>';
    // echo $Ans1.$Ans2.$Ans3.'<br>';
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<?php 
    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>

<p>①の答え</p>
<?php
//    echo "正解は".$correctAns1."です。";
//    echo $name."さんの回答は".$Ans1."でした。";
//    echo '<br>';
?>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if ($Ans1 == $correctAns1) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
echo '<br><br>';
?>
<p>②の答え</p>
<?php
//    echo "正解は".$correctAns2."です。";
//    echo $name."さんの回答は".$Ans2."でした。";
//    echo '<br>';
?>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if ($Ans2 == $correctAns2) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
    echo '<br><br>';
?>
<p>③の答え</p>
<?php
//    echo "正解は".$correctAns3."です。";
//    echo $name."さんの回答は".$Ans3."でした。";
//    echo '<br>';
?>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if ($Ans3 == $correctAns3) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
    echo '<br><br>';
?>



</body>
</html>