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
			<p class="greeting">ようこそ<?= h(' '.$user_data['last_name'].$user_data['first_name'].' '); ?>さん</p>
			<p class="logindate">最終ログイン日：<?= $user_data['last_login']; ?></p>
		</div>
	</header>
	<main>
        <table>
            <?php
                $data = new getData();
                $post_data = $data->getPostData();
                $stmt = $pdo->prepare('select posts.id, title, category.detail, comment, created from posts left join category on posts.category_no=category.id order by posts.id desc');
                $stmt->execute();
                for ($i=0; $i<1; $i++){
                    $fieldname = pg_field_name($post_data, $i);
                }
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <th><?= h($fieldname); ?></th>
                <td><?= h($row['id']); ?></td>
                <td><?= h($row['title']); ?></td>
                <td><?= h($row['detail']); ?></td>
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