<?php
//step2:結果を表すページを作成し、フォームから受け取った数字の羅列から1文字の数字を抜き出す。
$num = $_POST['numbers'];
//index.phpから送られてきた値をstr_splitで配列にする
$num_arr = str_split($num);
//配列にした変数のキーをランダムに取得する
$num_key = array_rand($num_arr);
$result = $num_arr[$num_key];

//if文でキーを判定
if ($result == 0) {
    $msg = "凶";
} elseif ($result >=1 && $result <= 3) {
    $msg = "小吉";
} elseif ($result >=4 && $result <= 6) {
    $msg = "中吉";
} elseif ($result >=7 && $result <= 8) {
    $msg = "吉";
} else {
    $msg = "大吉";
}

//step3:今日の日付と結果を表示する。
echo date("Y/m/d", time()).'の運勢は'.'<br>';
echo '選ばれた数字は'.$result.'<br>'.$msg;
?>