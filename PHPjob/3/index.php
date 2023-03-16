<h2>書込（空のtest.txtを準備　→「こんにちは」と記載）</h2>
<?php
    // index.php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // とりあえず、確認のため、echoで表示だけさせる
        echo "writable!!";
        echo '<br>';


        // 書き込み可能なときの処理
        // fopen:対象のファイルを開く
        //ファイルを開いた状態を$fpという変数に格納します。（w:完全上書き、a:追記）
        $fp = fopen($testFile, "a");
        // fwrite:対象のファイルに書き込む（第一引数で$fp（開いたファイル）を、第二引数に書き込む文字列を渡す）
        fwrite($fp, $contents);
        // fclose:ファイルを閉じる（開きっぱなしだと無駄なメモリを消費してしまうので、忘れずに閉じましょう。）
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";

    
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
?>




<h2>読込（「こんにちは」と文章を書いたtest2.txtを用意）</h2>
<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く（r:読込モード）
        $fp = fopen($test_file, "r");
        // fgets:開いたファイルから1行ずつ読み込む（読み込めなくなるまでループ処理する）
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
?>