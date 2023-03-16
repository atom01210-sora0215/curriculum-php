<html>
<p class="pstyle">変数・定数</p>
<style>.pstyle{font-size: 20px;text-decoration: underline;}</style>

<?php
// 変数：データを入れる箱（文字列：英語・日本語）
    $en_words = 'Hello World';
    var_dump($en_words);
    echo '<br>';
    $ja_words = 'こんにちは';
    var_dump($ja_words);
    echo '<br>';
    
// 変数：データを入れる箱（数値）
    $x = 8;
    $y = 5.55;
    echo '<br>';
// 変数：データを入れる箱（変数の型）
    echo $x;
    var_dump($x);
    echo '<br>';
    echo $y;
    var_dump($y);
    echo '<br>';

// 変数：データを入れる箱（論理値）
    $flag = true;
    var_dump($flag);
    echo '<br>';

// 変数：データを入れる箱（NULL型）
    $emp = null;
    var_dump($emp);
    echo '<br>';

// 定数：変更不可
    define("ADMIN_EMAIL", "y-i-group@gmail.com");
    define("LIST_COUNT", 15);
    echo ADMIN_EMAIL;
    echo '<br>';
    echo LIST_COUNT;
    echo '<br><br>';
?>

<p class="pstyle">代入、連結演算子、四則演算子、単項演算子</p>
<style>.pstyle{font-size: 20px;text-decoration: underline;}</style>
<?php
    // 代入演算子 
    $x = 5;
    // 連結演算子
    $hello = "Hello";
    $world = "World!!";
    echo $hello.$world."こんな感じ。" .'<br>';
    // 四則演算子
    echo 1 + 1 .'<br>';
    echo 10 - 1 .'<br>';
    echo 2 * 2 .'<br>';
    echo 10 / 5 .'<br>';
    echo 5 % 3 .'<br>';
    echo '<br>';
    // 単項演算子
    // $x = $x + 1
    $x++; 
    echo $x;
    // $x = $x - 1
    $x--;
    echo $x;
    echo '<br>';
    $x = 0;
    // $x = $x + 5;
    $x += 5;
    echo $x;
    // $x = $x * 5;
    $x *= 5;
    echo $x;
    // $x = $x - 5;
    $x -= 5;
    echo $x;
    echo '<br><br>';
?>


<p class="pstyle">条件分岐</p>
<style>.pstyle{font-size: 20px;text-decoration: underline;}</style>
<table style="border-collapse:collapse; border-spacing:0px; border:1px solid #000;">
    <tr>
        <th style="border:1px solid #000;">論理演算子</th><th style="border:1px solid #000;">演算記法</th><th style="border:1px solid #000;">説明</th>
    </tr>
    <tr>
        <td style="border:1px solid #000;">AND 演算</td style="border:1px solid #000;"><td>A && B</td><td style="border:1px solid #000;">AとB両方の条件を満たす場合に true</td>
    </tr>
    <tr>
        <td style="border:1px solid #000;">OR 演算</td><td style="border:1px solid #000;">A || B</td><td style="border:1px solid #000;">AまたはBどちらかの条件を満たす場合に true</td>
    </tr>
    <tr>
        <td style="border:1px solid #000;">NOT 演算</td><td style="border:1px solid #000;">A != B</td><td style="border:1px solid #000;">AがBでない場合に true</td>
    </tr>
</table>
<table style="border-collapse:collapse; border-spacing:0px; border:1px solid #000;">
    <tr>
        <th style="border:1px solid #000;">比較演算子</th><th style="border:1px solid #000;">意味</th>
    </tr>
    <tr>
        <td style="border:1px solid #000;">A === B</td><td style="border:1px solid #000;">AとBが等しく、同じ型である場合</td>
    </tr>
    <tr>
        <td style="border:1px solid #000;">A !== B</td><td style="border:1px solid #000;">AとBが等しくないか、同じ型でない場合</td>
    </tr>
</table>
<br><br>

<?php
    $age = 18;
    if ($age >= 20) {
        echo "お酒が飲めるぞ！";
    } else {
        echo "お酒は二十歳になってから！";
    }
    echo '<br>';

    if ($is_student) {
        echo 'あなたは学生です。';
    }
    echo '<br>';

    // 年齢
    $age = 50;
    // 学生かどうか
    $is_student = true;
    if ($age < 25 && $is_student) {
        echo '学割パックが使えるよ';
    } elseif ($age < 25) {
        echo '若者応援割引が使えるよ';
    } else {
        echo '割引が使えないよ';
    }
    echo '<br>';
?>


<?php
// 例として、血液型を診断する条件分岐
    $blood = '';
    if($blood == 'A') {
        echo "A型です";
    } elseif($blood == 'B') {
        echo "B型です";
    } elseif($blood == 'O') {
        echo "O型です";
    } elseif($blood == 'AB') {
        echo "AB型です";
    } else {
        echo "A/B/O/ABから選択してください";
    }
    echo '<br>';

// Switch文
    $blood = 'AB';
    switch ($blood) {
        case 'A':
            print 'A型です';
            break;
        case 'B':
            print 'B型です';
            break;
        case 'O':
            print 'O型です';
            break;
        case 'AB':
            print 'AB型です';
            break;
        default:
            echo 'A/B/O/ABから選択してください';
    }
    echo '<br>';

//三項演算子
    $name = "a";
    echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';
    echo '<br>';


//比較演算子===（型まで比較）
    $string = '1';
    $int = 1;

    if (1 === $string) {
    echo '変数stringはint型です。';
    } else {
    echo '変数stringはstring型です。';
    }
    // 「変数stringはstring型です」が出力される

    if (1 === $int) {
    echo '変数stringはint型です。';
    } else {
    echo '変数stringはstring型です。';
    }
    // 「変数stringはint型です。」が出力される
    echo '<br><br>';
?>


<!-- チャレンジ -->
<?php
    $name = "tarachan";
    $password = "passwd";
    
    if ($name === "taro" && $password === "pass") {
        echo 'ログイン成功です';
    } elseif ($name === "taro" || $password === "pass") {
        if ($name !== "taro"){
            echo '名前が間違っています';
        } elseif ($password !== "pass") {
            echo 'パスワードが間違っています';
        }
    } else {
        echo '入力情報が間違っています';
    }
    echo '<br><br>';
?>



<p class="pstyle">ループ文</p>
<style>.pstyle{font-size: 20px;text-decoration: underline;}</style>
<table style="border-collapse:collapse; border-spacing:0px; border:1px solid #000;">
    <tr>
        <th style="border:1px solid #000;">while</th><th style="border:1px solid #000;">繰り返す回数が決まっていない時</th>
    </tr>
    <tr>
        <td style="border:1px solid #000;">do...while</td><td style="border:1px solid #000;">最低1回は繰り返したい時</td>
    </tr>
    <tr>
        <td style="border:1px solid #000;">for/td><td style="border:1px solid #000;">繰り返す回数が決まっている時</td>
    </tr>
</table>
<br><br>

<?php
//while、繰り返す回数が決まっていない時、条件式を繰り返す
    $num = 0; 
    while($num < 10) {
        echo $num;
        $num++;
    }
    echo '<br>';

//do...while、最低１回は処理が実行される、条件式を繰り返す
    $num = 0; 
    do {
        echo $num;
        $num++; 
    } while($num < 10);
    echo '<br>';

//for、決まった回数処理を繰り返し、条件式を繰り返す
    $num = 0;    //初期化式。最初に1回だけ実行され、条件式の中で使用する変数の初期化を行います。
    ($num < 10);  //条件式→falseなら終了。条件式がTRUEならブロック内の処理を実行し、FALSEならfor文を終了します。
    //実行する処理
    $num++;      //変化式 $num = 1
    ($num < 10);  //条件式→falseになるまで繰り返し、falseなら終了
    //実行する処理
    $num++;      //変化式 $num = 2
    ($num < 10);  //条件式、数値を変更することで繰り返し回数を変更できます。
    
    //０〜９まで数えるコード
    for($i=0;$i<10;$i++) { 
        echo $num;
        echo $num($i);
    }
    echo '<br>';



//break 、繰り返しを途中で終了させることができます。
    $num = 0;
    while($num < 10) {
        echo $num;
        $num++;
        if($num == 5) {
            break;
        }
    }
    echo '<br><br>';
?>


<!-- チャレンジ -->
<?php
    $num = 0;
    while($num <= 100) {
        echo $num . '<br>';
        $num++;
    }
    echo '<br><br>';
?>








</html>