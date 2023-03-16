<?php
// 変数iを宣言しなければ当然コンパイルエラーになります。
// 以下のように変数iの初期化をfor文の外に出すことは可能です。
// この場合、for文終了後も変数iにアクセスできます。
// https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q14153536944



$i = 1;
for (; $i <= 100; $i++){
    
    if ($i % 3 === 0 && $i % 5 === 0){
        echo 'FizzBuzz!!';
    }else if ($i % 3 === 0){
        echo 'Fizz!';
    }else if ($i % 5 === 0){
        echo 'Bizz!';
    }else{
        echo $i;
    }
    echo '<br>';
}

echo $i;
echo $i;