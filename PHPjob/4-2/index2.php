<?php
require_once("getData.php");

// getDataクラスをインスタンス化
$data = new getData();
// getData内のgetUserData関数を実行し、変数に代入
$user_data = $data->getUserData();
$post_data = $data->getPostData();
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
				ようこそ<?= h(' '.$user_data['last_name'].$user_data['first_name'].' '); ?>さん
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
			<tr>
				<?php while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) { ?>
				<td><?= h($row['id']); ?></td>
				<td><?= h($row['title']); ?></td>
				<td><?php switch ($row['category_no']) {
				    case '1': print '食事';
				        break;
				    case '2': print '旅行';
				        break;
				    default: echo 'その他';
				}?></td>
				<td><?= h($row['comment']); ?>
				</td>
				<td><?= h($row['created']); ?>
				</td>
			</tr>
			<?php }?>
		</table>
	</main>
	<footer>
		<small>Y&I group, inc</small>
	</footer>

</body>

</html>