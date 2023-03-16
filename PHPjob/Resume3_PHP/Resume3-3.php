<html>
<!-- 組み込み関数 -->
<?php
// ceil（切り上げ）http://php.net/manual/ja/function.ceil.php
    $x = 5.2;
    echo ceil($x);
    echo '<br>';

// floor（切り捨て）http://php.net/manual/ja/function.floor.php
    $x = 5.2;
    echo floor($x);
    echo '<br>';

// round（四捨五入）http://php.net/manual/ja/function.round.php
    $x = 5.2;
    echo round($x);
    echo '<br>';

// pi（円周率）http://php.net/manual/ja/function.pi.php
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2);
    echo '<br>';

// mt_rand（乱数）http://php.net/manual/ja/function.mt-rand.php
    echo mt_rand(1, 100);
    echo '<br><br>';

// strlen（文字列の長さ）http://php.net/manual/ja/function.strlen.php
    $str = "hogehoge";
    echo strlen($str);
    echo '<br>';

// strpos（検索）http://php.net/manual/ja/function.strpos.php
    $str = "yoneyama";
    echo strpos($str, "a");
    // => 5と出力される
    echo '<br>';

// substr（文字列の切り取り）http://php.net/manual/ja/function.substr.php
//substr(対象の文字列, 開始位置, 文字数)（正の順番は左0から、負の順番は右-1から数える）
    $str = "yoneyama";
    echo substr($str, -2, 2);
    // => maと出力される
    echo '<br>';

// str_replace（置換）http://php.net/manual/ja/function.str-replace.php
//str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
    $str = "yoneyama";
    echo str_replace("neya", "NEYA", $str);
    echo '<br>';
//「 空白を空文字で置き換える 」という意味で、空白を削除する、という使い方もされます。
    $str = "I am Yoneyama";
    echo str_replace(" ", "", $str);
    echo '<br><br>';

// 日本語（マルチバイト文字列）において、文字列操作の関数を使用する場合（strlen、strpos、substr）
//http://php.net/manual/ja/function.mb-strlen.php
//http://php.net/manual/ja/function.mb-strpos.php
//http://php.net/manual/ja/function.mb-substr.php
//http://php.net/manual/ja/ref.mbstring.php
    $str = "あいうえお";
    echo strlen($str);
    // => 15
    echo '<br>';
    $str = "あいうえお";
    echo mb_strlen($str);
    // => 5
    echo '<br><br>';


// printf（フォーマット化した文字列を出力）http://php.net/manual/ja/function.printf.php
// %s…文字列
// %d…数値
    $name = "米山さん";
    $limit_number = 40;
    //echo $name."の残り時間はあと".$limit_number."です";
    printf("%sの残り時間はあと%dです", $name, $limit_number);
    echo '<br>';

// %02d…桁数を指定することができ、空いた桁に0を自動で入れてくれます。
    $limit_hour = 20;
    $limit_minute = 10;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    // => 残り20時間10分
    echo '<br>';
    $limit_hour = 4;
    $limit_minute = 4;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
        // => 残り04時間04分
        echo '<br>';

// sprintf（変数に代入できるprintf）http://php.net/manual/ja/function.sprintf.php
//http://php.net/manual/ja/function.sprintf.php
    $limit_hour = 4;
    $limit_minute = 4;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;
    echo '<br><br>';
?>


<!-- 便利な関数（配列） -->
<?php
// count（要素の数を数える）http://php.net/manual/ja/function.count.php
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    echo count($members);
    // => 5
    echo '<br>';

// sort（要素の並べ替え）http://php.net/manual/ja/function.sort.php
// sortは返却値が論理値（true / false）の為、sort($numbers);として、並び替えをした後、表示
//http://php.net/manual/ja/ref.array.php
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    sort($members);
    var_dump($members);
    echo '<br>';
    $numbers = [26, 35, 17, 67, 45];
    sort($numbers);
    var_dump($numbers);
    echo '<br>';

    // in_array（配列に中にある要素が存在しているか）http://php.net/manual/ja/function.in-array.php
    //in_array(調べたい文字もしくは数値, 対象の配列)
    // 論理値が結果として返る => bool(true) => if文の条件でよく使用します。
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    var_dump(in_array("tanaka", $members));
        // => bool(true)
    echo '<br>';

    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    if (in_array("tanaka", $members)) {
        echo "田中さんがいるよ！";
    } else {
        echo "田中さんはいないよ！";
    }
    echo '<br><br>';

// implode（配列を結合して文字列に変換）http://php.net/manual/ja/function.implode.php
//第一引数で配列を結合させる際に入れたい文字（不要ならなし）を、第2引数で対象の配列を指定
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    $atstr = implode("@", $members);
    var_dump($atstr);
    echo '<br>';
    $atstr = implode($members);
    var_dump($atstr);
    echo '<br><br>';

// explode（文字列を指定の区切りで配列にする）http://php.net/manual/ja/function.explode.php
// implodeの逆。
    // 配列をimplodeで文字列にする
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    $atstr = implode("@", $members);
    var_dump($atstr);
    // その文字列をexplodeでもとの配列に分割
    $re_members = explode("@", $atstr);
    var_dump($re_members);
    echo '<br>';
    // カンマ区切りの文字列を配列にする
    $str = "1,2,3,4,5";
    $array = explode(",",$str);
    var_dump($array);
    echo '<br><br>';
?>


<!-- 便利な関数（日付・時間） -->
<!-- UNIXタイムスタンプ :「1970年1月1日午前0時0分0秒」から、何秒経過しているか 表した数値-->
<?php
// time（現在時刻を取得）http://php.net/manual/ja/function.time.php
    echo time();
    echo '<br>';

// date（タイムスタンプから日付に戻す）
//UNIXタイムスタンプ変換ツール http://url-c.com/tc/
//日付フォーマットについて http://php.net/manual/ja/function.date.php
    // 現在時刻を取得
    echo date("Y-m-d H:i:s", time());
    echo date("Y-m-d H:i:s", time());
    echo '<br>';
    echo date("Y年m月d日 H時i分s秒", time());
    echo '<br>';

// strtotime（特定日付のタイムスタンプを取得）http://php.net/manual/ja/function.strtotime.php
    echo strtotime("2022/12/31 11:25:00");
    echo '<br>';
    // 先週の日曜日
    echo strtotime("last Sunday");
    echo '<br>';
    // 2日後
    echo strtotime("+2 day");
    echo '<br><br>';





?>
</html>