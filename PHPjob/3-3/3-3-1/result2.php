<html>
<!-- step2:結果を表すページを作成し、
フォームから受け取った数字の羅列から1文字の数字を抜き出す。 -->
<?php
$num = $_POST['numbers'];
var_dump($_POST);
echo '<br>';


//wordwrap（文字列を指定した文字数に分割）
$wordwrap_num = wordwrap($num, 1, ',', true);
var_dump($wordwrap_num);
echo '<br>';
//explode(分割した文字列を配列にする)
$num_arr = explode(',', $wordwrap_num);
var_dump($num_arr);
echo '<br><br>';
// count（要素の数を数える）、mt_rand(範囲内で乱数発生させる)
$count_num = mt_rand(0, count($num_arr) - 1);
var_dump($count_num);
echo $num_arr[$count_num];
echo '<br><br>';
?>
<!-- step3:今日の日付と結果を表示する。 -->
<?php
    if ($num_arr[$count_num] == 0) {
        $msg2 = "凶";
    } elseif ($num_arr[$count_num] <= 3) {
        $msg2 = "小吉";
    } elseif ($num_arr[$count_num] <= 6) {
        $msg2 = "中吉";
    } elseif ($num_arr[$count_num] <= 8) {
        $msg2 = "吉";
    } else {
        $msg2 = "大吉";
    }
    echo date("Y/m/d", time()).'の運勢は'.'<br>';
    echo '選ばれた数字は'.$num_arr[$count_num].'<br>';
    echo $msg2;
    echo '<br><br>';
?>


<?php
//str_split（文字列を配列に変換する）
$str_split_num = str_split($num, 1);
var_dump($str_split_num);
echo '<br><br>';
// count（要素の数を数える）、mt_rand(範囲内で乱数発生させる)
$num_key = mt_rand(0, count($str_split_num) - 1);
var_dump($num_key);
echo $str_split_num[$num_key];
echo '<br><br>';

//(おまけ)シャッフルして先頭を取得してみる
// shuffle($re_numbers);
// print_r($re_numbers);
// echo $re_numbers[0];
// echo '<br><br>';


    if ($str_split_num[$num_key] == 0) {
        $msg = "凶";
    } elseif ($str_split_num[$num_key] <= 3) {
        $msg = "小吉";
    } elseif ($str_split_num[$num_key] <= 6) {
        $msg = "中吉";
    } elseif ($str_split_num[$num_key] <= 8) {
        $msg = "吉";
    } else {
        $msg = "大吉";
    }
    
echo '<br>';
echo date("Y/m/d", time()).'の運勢は'.'<br>';
echo '選ばれた数字は'.$str_split_num[$num_key].'<br>';
echo $msg;

?>

</html>