<htm>
<!-- 例外処理 -->
<!--読み込むファイルが存在しない -->
<!--データベースの処理において接続障害 -->
<!--0で割り算をしたなど -->
<?php
//0で割り算をした場合
//例外が発生する可能性がある箇所をtry{}に書きます。
//throw new Exception()で例外を投げます。
//例外が投げられた時の処理をcatch(){}に書いていきます。
    function devide($int1,$int2) {
        //例外が発生する（例外を投げる）可能性があるコード
        try {
            if($int2 == 0) {
                //「throw new 例外クラス名(引数)」でインスタンスを作成
                throw new Exception('0で割ることはできません。');
            }
            return $int1 / $int2;
        //「catch(例外クラス名 例外を代入する変数名) 」でインスタンスを変数に代入
        } catch(Exception $e) {
            //例外が発生した場合に行う処理
            echo "例外処理が発生しました";
            echo "<br>";
            echo $e->getMessage();
        }
    }
    //例外が発生した場合に行う処理
    echo devide(5, 0);
?>










</htm>