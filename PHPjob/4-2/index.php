<?php
session_start();
require_once("pdo.php");
require_once("getData.php");
$pdo = db_connect();

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
                $stmt = $pdo->prepare('select * from users');
                $stmt->execute();
                foreach ($stmt as $row) {
                    $LN= $row['last_name'];
                    $FN= $row['first_name'];
                    $LL= $row['last_login'];
                }
            ?>
			<p class="greeting">ようこそ<?= print h(' '.$LN.$FN.' '); ?>さん</p>
			<p class="logindate">最終ログイン日：<?=  print h($LL); ?></p>
		</div>
	</header>
	<main>
        <table>
            <?php
                try {
                    $stmt = $pdo->prepare('select posts.id, title, category.detail, comment, created from posts left join category on posts.category_no=category.id order by posts.id desc');
                    $stmt->execute();
                } catch(PDOException $Exception) {
                    die('Error: ' . $e->getMessage());
                }
            ?>
            <tr>
                <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        // echo $row['id'] . '、' . $row['title'] . '、' . $row['detail'] . '、' . $row['comment'] . '、' . $row['created'];
                        // echo '<br />';

                ?>
                <th></th>
                <td><?= h($row['id']); ?></td>
                <td><?= h($row['title']); ?></td>
                <td><?= h($row['detail']); ?></td>
                <td><?= h($row['comment']); ?></td>
                <td><?= h($row['created']); ?></td>
                <?php }?>
			</tr>
		</table>
	</main>
	<footer>
		<small>Y&I group, inc</small>
	</footer>

</body>

</html>