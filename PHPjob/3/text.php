<html>
<!-- ファイルのデータを読み書きする -->

<?php
$color = 'blue';
echo "Sky is ${color} color <br>";
echo "Sky is {$color} color";
echo '<br><br>';
?>


<?php
    //http://php.net/manual/ja/function.fopen.php
    //書き込み対象のファイルを変数に入れておき、書き込む文字も変数にしておく
    $testFile = "test.txt";
    $contents = "こんにちは！";
    //ファイルが書き込み可能なのか確認する
    if (is_writable($testFile)) {
    
        // 書き込み可能なときの処理
        // とりあえず、確認のため、echoで表示だけさせる
        echo "writable!!";
    
    } else {
        // 書き込み不可だった場合は、exitで処理を終了します。
        echo "not writable!";
        exit;
    }
    echo '<br><br>';
?>
<?php
    $testFile = "test.txt";
    $contents = "こんにちは！こんにちは！";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        //ファイルを開いた状態を$fpという変数に格納
        // 対象のファイルを開く（"w"=>上書き、"a"=>追記）
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
    echo '<br><br>';
?>


<!-- ファイルのデータを読み書きする -->
<?php
    $test_file = "test2.txt";
    //is_readable: ファイルが読み込み可能な場合はTrueを返し、読み込み可能な場合はファイルを開きます。
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く（"r"=>読み込み）
        $fp = fopen($test_file, "r");
        // fgets: 開いたファイルから1行ずつ読み込む（読み込めなくなるまでループ処理を実行）
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }


//     if文で書く場合の考え方と、回答例を掲載しますので検証してみてください。

// 考え方
// if(条件式1){
// 　条件を満たす場合の処理を記述
// }else if(条件式2){
// 　条件1を満たさなかった場合の処理を記述（条件2のみ満たす）
// }else if(条件式3){
// 　条件1も条件2も満たさなかった場合の処理を記述（条件3のみ満たす）
// }else{
// 　条件1、2、3いづれも満たさなかった場合の処理を記述
// }

// 回答例


// 名前とパスワードの変数を用意する。
$name = "taro";
$pass = "password";

// 名前が「 taro 」、パスワードが「 pass 」であった場合
if ($name == "taro" && $pass == "pass") {
  echo "ログイン成功です。";
// 名前だけ正しかった場合
} else if ($name == "yamada") {
  echo "パスワードが間違っています。";
// パスワードだけ正しかった場合  
} else if ($pass == "password") {
  echo "名前が間違っています。";
// 名前もパスワードも間違っていた場合
} else {
  echo "入力情報が間違っています。";
}
?>










</html>