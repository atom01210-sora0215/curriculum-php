<?php
require_once('db_connect.php');
require_once('function.php');

if (isset($_POST['signUp'])) {
    if (empty($_POST['name'])) {
        $resultMsg ='名前を入力してください';
    } elseif (empty($_POST['password'])) {
        $resultMsg = 'パスワードを入力してください';
    }
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        $resultMsg = null;
        $name = $_POST['name'];
        $password = $_POST['password'];
        $pdo = db_connect();
        try {
            $sql = 'INSERT INTO users (name, password) values (:name, :password)';
            $stmt = $pdo->prepare($sql);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindParam(':name', $name);
            $stmt->bindValue(':password', $hash);
            $stmt->execute();
            $resultMsg = '登録が完了しました';
        } catch (PDOException $e) {
            exit('DBエラー' . $e->getMessage());
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
			<h2>ユーザー登録画面</h2>
		</div>
		<?php if(!empty($resultMsg)): ?>
		<p><?php echo $resultMsg; ?></p>
		<?php endif; ?>
		<form action="" method="POST">
			<input type="text" name="name" size="15" placeholder="ユーザー名" class="formTxt"><br>
			<input type="password" name="password" size="15" placeholder="パスワード" class="formTxt"><br>
			<input type="submit" name="signUp" value="新規登録" id="signUp" class="button">
		</form>
	</main>
</body>

</html>