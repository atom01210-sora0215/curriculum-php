<?php
require_once("getData.php");

try {
// getDataクラスをインスタンス化
$data = new getData();
// getData内のgetUserData関数を実行し、実行結果を変数に代入 →変数をforeachで繰り返し、keyを指定すると値が取得できる
$user_data = $data->getUserData();
$post_data = $data->getPostData();
$fullname = $user_data['last_name'] . $user_data['first_name'];
} catch (PDOException $e) {
	die('取得できませんでした。'. $error->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>4章チェックテスト</title>
</head>

<body>
	<header>
		<h1><img src="1599315827_logo.png" alt=""></h1>
		<div class="headerWrap">
			<p class="greeting">
				ようこそ<?= h(' '.$fullname.' '); ?>さん
			</p>
			<p class="logindate">
				最終ログイン日：<?= $user_data['last_login']; ?>
			</p>
		</div>
	</header>
	<main>
		<table>
			<tr>
				<th>記事ID</th>
				<th>タイトル</th>
				<th>カテゴリ</th>
				<th>本文</th>
				<th>投稿日</th>
			</tr>
			<?php foreach ($post_data as $row) { ?>
			<tr>
				<td><?php echo h($row['id']); ?></td>
				<td><?php echo h($row['title']); ?></td>
				<td><?php
				if ($row['category_no'] == 1) {
					echo '食事';
				} elseif ($row['category_no'] == 2) {
					echo '旅行';
				} else {
					echo 'その他';
				}?></td>
				<td><?php echo h($row['comment']); ?></td>
				<td><?php echo h($row['created']); ?></td>
			</tr>
			<?php }?>
		</table>
	</main>
	<footer>
		<small>Y&I group, inc</small>
	</footer>

</body>

</html>