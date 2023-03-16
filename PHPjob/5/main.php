<?php
require_once('db_connect.php');
require_once('function.php');
check_user_logged_in();

$pdo = db_connect();
try {
    $stmt = $pdo->prepare('SELECT * FROM books');
    $stmt->execute();
} catch (PDOException $e) {
    echo 'DBエラー' . $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5章チェック課題 | 在庫一覧</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="list">
		<h2>在庫一覧画面</h2>
		<div class=mainWrap>
			<button type="button" onclick="location.href='create_book.php'" class="baseBtn createBtn">新規登録</button>
			<button type="button" onclick="location.href='logout.php'" class="baseBtn logoutBtn">ログアウト</button>
		</div>
		<table>
			<tr>
				<th>タイトル</th>
				<th>発売日</th>
				<th>在庫数</th>
				<th></th>
			</tr>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
			<tr>
				<td><?= h($row['title']); ?></td>
				<td><?php echo $row['date']; ?></td>
				<!-- <td><?= date('Y/m/d', strtotime($row['date'])); ?></td> -->
				<td><?= h($row['stock']); ?></td>
				<!-- <td><button type="button"
						onclick="location.href='delete_book.php?id=<?php echo $row['id']; ?>'"
						class="baseBtn dltBtn">削除</button></td> -->
				<td><button class="baseBtn dltBtn"><a href="delete_book.php?id=<?php echo $row['id'] ?>">削除</a></button></td>
			</tr>
            <?php } ?>
		</table>
	</main>
</body>

</html>