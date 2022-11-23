<?php


// 定数定義：DB名
define('DB_DATABASE', 'YIGroupBlog');
// 定数定義：MySQLのユーザー名
define('DB_USERNAME', 'root');
// 定数定義：MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// 定数定義：DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */
function db_connect()
{
    try {
        // PDOインスタンスの作成（接続確立）
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        //echo 'DBと接続しました';
        // PDOのエラー処理方法の設定（PDO使用時は必ず書く）
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        // catch: try失敗したらエラー表示、接続終了
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}
