<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3章チェックテスト_question</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $name = $_POST['name'];
    
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $choice1 = ["80", "22", "20", "21"];
    $choice2 = ["PHP", "Python", "JAVA", "HTML"];
    $choice3 = ["join", "select", "insert", "update"];
    
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $correct = ["80","HTML","select"];

    // formタグ内の操作で渡しやすくするために、ひとつの文字列にまとめる。
    $correct_all = implode("@",$correct);

    // foreachを使った関数を定義する。
    // 配列名 , フォーム受け渡し先指定ナンバリング
    function radioForeach($item,$num) {
        global $choice1 , $choice2 , $choice3;

        foreach($item as $element) {
            ?>
                <input type="radio" name="<?php echo 'answer' . "$num"; ?>"; value="<?php echo $element; ?>">
            <?php
            echo $element;
        }
    }
?>
<body>
    <form action="answer.php" method="post">

        <p>お疲れ様です<?php echo $name; ?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php radioForeach($choice1,1); ?>

        <h2>②Webページを作成するための言語は？</h2>
        <?php radioForeach($choice2,2); ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <?php radioForeach($choice3,3); ?>

        <!-- すでに入力された情報 と 用意した情報 を受け渡す。 -->
        <input type="hidden" name="name" value="<?php echo $name; ?>" />
        <input type="hidden" name="correct_all" value="<?php echo $correct_all; ?>" />

        <!-- 問題の正解の変数と名前の変数を[answer.php]に送る -->
        <br>
        <input type="submit" value="回答する" />

    </form>

</body>
</html>