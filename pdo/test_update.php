<?php
// require_once: 作成した外部ファイルdb_connect.phpを読み込む
//読み込むことで、db_connect.phpに記載した関数db_connect()が使用できます。
require_once('db_connect.php');



// 変数を用意
$id = 4;
$name = 'Hanako Yamada';
$password = 'hanako';

// 実行したいSQL文を準備
$sql = "UPDATE users SET name = :name, password = :password WHERE id = :id";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo '更新完了です';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
