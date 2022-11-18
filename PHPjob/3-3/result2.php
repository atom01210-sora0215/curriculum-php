<html>
<!-- step2:結果を表すページを作成し、
フォームから受け取った数字の羅列から1文字の数字を抜き出す。 -->
<?php

$numbers = $_POST['numbers'];
var_dump($_POST);
echo '<br>';
//wordwrap（文字列を指定した文字数に分割）
$wordwrap_numbers = wordwrap($numbers, 1, ',', true);
var_dump($wordwrap_numbers);
echo '<br>';
//explode(分割した文字列を配列にする)
$re_numbers = explode(',', $wordwrap_numbers);
var_dump($re_numbers);
echo '<br><br>';
// count（要素の数を数える）、mt_rand(範囲内で乱数発生させる)
$pick_numbers = mt_rand(0, count($re_numbers) - 1);
echo $re_numbers[$pick_numbers];
echo '<br><br>';


//(おまけ)シャッフルして先頭を取得してみる
// shuffle($re_numbers);
// print_r($re_numbers);
// echo $re_numbers[0];
// echo '<br><br>';
?>


<!-- step3:今日の日付と結果を表示する。 -->
<?php
    if ($pick_numbers == 0) {
        $msg = "凶";
    } elseif ($pick_numbers <= 3) {
        $msg = "小吉";
    } elseif ($pick_numbers <= 6) {
        $msg = "中吉";
    } elseif ($pick_numbers <= 8) {
        $msg = "吉";
    } else {
        $msg = "大吉";
    }
    
echo date("Y/m/d", time()).'の運勢は'.'<br>';
echo '選ばれた数字は'.$re_numbers[$pick_numbers].'<br>';
echo $msg;

?>

</html>