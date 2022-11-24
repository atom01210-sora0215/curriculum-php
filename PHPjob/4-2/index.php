<?php
session_start();
require_once("pdo.php");
require_once("getData.php");
$pdo = connect();

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
			<?php
                // getDataクラスをインスタンス化
                $data = new getData();
				// getData内のgetUserData関数を実行し、変数に代入
				$user_data = $data->getUserData();
			?>
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
				<?php
					$getcolumns_sql = "show columns from posts";
					$stmt = $pdo -> query($getcolumns_sql);
					$col = $stmt->fetchAll(PDO::FETCH_COLUMN);
					$colname = array(
						'id' => '記事ID',
						'title' => 'タイトル',
						'category_no' => 'カテゴリ',
						'comment' => '本文',
						'created' => '投稿日'
					);
					foreach($colname as $key){
						echo '<th>'.$key.'</th>';
					}
				?>
			</tr>
			<tr>
				<?php
						$data = new getData();
						$post_data = $data->getPostData();
						while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) {
				?>
				<td><?= h($row['id']); ?></td>
				<td><?= h($row['title']); ?></td>
				<td><?php switch ($row['category_no']){
					case '1': print '食事';
					break;
					case '2': print '旅行';
					break;
					default: echo 'その他';}?></td>		
				<td><?= h($row['comment']); ?></td>
				<td><?= h($row['created']); ?></td>
			</tr>
			<?php }?>
		</table>
	</main>
	<footer>
		<small>Y&I group, inc</small>
	</footer>

</body>

</html>