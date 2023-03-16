<?php
require_once('db_connect.php');
require_once('function.php');
// メッセージ初期化
$userError = '';
$passError = '';
$okMessage = '';
$db_error = '';

if (isset($_POST['register'])) {
    if (empty($_POST['name'])) {
        $userError = 'ユーザー名が未入力です。';
    } elseif (empty($_POST['password'])) {
        $passError = 'パスワードが未入力です。';
    }
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'],ENT_QUOTES);
        $pdo = db_connect();
        try {
            $sql = 'INSERT INTO users (name, password) values (:name, :password)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $hash);
            $stmt->execute();
            $okMessage = 'ユーザーの登録が完了しました。';
        } catch (PDOException $e) {
            $db_error = 'データベースエラー';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5章チェック課題 | ユーザー登録</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="main">
		<div class=topWrap>
        <font color="ACFF84"><?php echo htmlspecialchars($okMessage, ENT_QUOTES); ?></font><br>
        <h2>ユーザー新規登録</h2>
		</div>
		<form action="register.php" method="POST">
			<input type="text" name="name" size="15" placeholder="ユーザー名" class="formTxt"><br>
			<input type="password" name="password" size="15" placeholder="パスワード" class="formTxt"><br>
			<input type="submit" name="register" value="新規登録" id="signUp" class="button">
            <font color="red"><?php echo htmlspecialchars($userError, ENT_QUOTES); ?></font><br>
            <font color="red"><?php echo htmlspecialchars($passError, ENT_QUOTES); ?></font><br>
            <font color="red"><?php echo htmlspecialchars($db_error, ENT_QUOTES); ?></font><br>
        </form>
    </main>
</body>

</html>