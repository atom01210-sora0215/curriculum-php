<?php
require_once('db_connect.php');
require_once('function.php');
session_start();

if(!empty($_POST)) {
    if (empty($_POST['name'])) {
        $resultMsg='名前を入力してください';
    } elseif (empty($_POST["pass"])) {
        $resultMsg='パスワードを入力してください';
    }
    if (!empty($_POST['name']) && !empty($_POST['pass'])) {
        $resultMsg = null;
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            exit('DBエラー' . $e->getMessage());
        }
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if(password_verify($pass, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header('Location: main.php');
                exit;
            } else {
                $resultMsg = 'パスワードに誤りがあります';
            }
        } else {
            $resultMsg = 'ユーザー名かパスワードに誤りがあります';
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
	<title>5章チェック課題 | ログイン</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="main">
		<div class=topWrap>
			<h2>ログイン画面</h2>
			<button type="button" onclick="location.href='signUp.php'" class="baseBtn newBtn">新規ユーザー登録</button>
		</div>
		<?php if(!empty($resultMsg)): ?>
		<p><?php echo $resultMsg; ?></p>
		<?php endif; ?>
		<form action="" method="POST">
			<input type="text" name="name" size="15" placeholder="ユーザー名" class="formTxt"><br>
			<input type="password" name="pass" size="15" placeholder="パスワード" class="formTxt"><br>
			<input type="submit" value="ログイン" class="button">
		</form>
	</main>
</body>

</html>