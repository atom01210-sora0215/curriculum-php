<?php
require_once('db_connect.php');

// submitボタンを押した時、formからPOSTで送られたデータがあれば処理実行
if (isset($_POST["signUp"])) {
    // nameとpassword両方送られてきたら処理実行
    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        // 入力したユーザIDとパスワードを定義済変数に代入（連想配列）
        $name = $_POST["name"];
        $password = $_POST["password"];
        
        // 関数db_connect()からPDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // 実行したいSQL文を準備
            $sql = "insert into users (name, password) values (:name, :password)";
            // パスワードをハッシュ化(password_hashで変換した値を変数$password_hashに代入)
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            
            // プリペアドステートメントの作成（PDOでsql文を変換、変数に格納）
            $stmt = $pdo->prepare($sql);
            // 値をセット
            $stmt->bindParam(':name', $name);
            //$stmt->bindParam(':password', $password);
            // :passwordにバインドする場合は、$password_hashを使用する
            $stmt->bindValue(':password', $password_hash);
            // MySqlに命令を実行
            $stmt->execute();
            // 登録完了メッセージ出力
            echo '登録が完了しました。';
            //var_dump($stmt);
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'データベースエラー' . $e->getMessage();
            // 終了
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<h1>新規登録</h1>
	<form action="login.php" method="POST">
		user:<br>
		<input type="text" name="name" id="name">
		<br>
		password:<br>
		<input type="password" name="password" id="password"><br>
		<input type="submit" value="submit" id="signUp" name="signUp">
	</form>
</body>

</html>