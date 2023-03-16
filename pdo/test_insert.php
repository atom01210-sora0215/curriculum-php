<?php
// require_once: 作成した外部ファイルdb_connect.phpを読み込む
//読み込むことで、db_connect.phpに記載した関数db_connect()が使用できます。
require_once('db_connect.php');


$name = 'Taro Yamada';
$password = 'taro';


// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    //PDO::prepare, PDOStatement::execute
    $stmt = $pdo->prepare($sql);
    //PDOStatement::bindParam :nameに$nameの値を固定する
    $stmt->bindParam(':name', $name);
    //PDOStatement::bindParam :passwordに$passwordの値を固定する
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
