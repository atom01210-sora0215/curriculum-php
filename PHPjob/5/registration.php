<?php
require_once('db_connect.php');
require_once('function.php');
check_user_logged_in();

if (!empty($_POST['title']) && !empty($_POST["date"]) && $_POST["stock"] !== '選択してください') {
    if (empty($_POST['title'])) {
        $resultMsg = 'タイトルを入力してください';
    } elseif (empty($_POST["date"])) {
        $resultMsg='発売日を入力してください';
    } elseif ($_POST["stock"] === '選択してください') {
        $resultMsg='在庫数を選択してください';
    }
    $resultMsg = null;
    $title = $_POST['title'];
    $date = $_POST['date'];
    $stock = $_POST['stock'];
    $pdo = db_connect();
    try {
        $sql = 'INSERT INTO books (title, date, stock) values (:title, :date, :stock)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(":date", date("Y/m/d", time($date)));
        $stmt->bindValue(':stock', (int)$stock, PDO::PARAM_INT);
        $stmt->execute();
        $resultMsg = '登録が完了しました';
    } catch (PDOException $e) {
        exit('DBエラー' . $e->getMessage());
    }
    //リロード対策
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     header('Location:registration.php');
    //     exit;
    //     }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5章チェック課題 | 本_登録</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="main">
		<div class=topWrap>
			<h2>本&nbsp;登録画面</h2>
		</div>
		<?php if(!empty($resultMsg)): ?>
		<p><?php echo $resultMsg; ?></p>
		<?php endif; ?>
		<form action="" method="POST">
			<input type="text" name="title" size="15" placeholder="タイトル" class="formTxt"><br>
			<input name="date" onfocus="this.type='date'" onblur="this.type='text'" size="15"
				placeholder="発売日" class="formTxt"><br>

			<label>在庫数</label><br>
			<div class="dropdown">
				<select required name="stock" class="formSelect">
					<option hidden>選択してください</option>
                    <?php for ($i=5;$i<=30;$i+=5){ ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php }?>
				</select>
			</div>
			<input type="submit" value="登録" class="button">
		</form>
	</main>
</body>

</html>