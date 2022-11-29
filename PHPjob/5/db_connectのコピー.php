<?php
define('DB_DATABASE', 'BookInv');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */
function db_connect()
{
    try {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // echo 'DBと接続しました';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo '接続エラー ' . $e->getMessage();
        die();
    }
}

/*
class Connect {
    const DB_DATABASE = 'BookInv';
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = 'root';
    // const PDO_DSN = 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE;

    private $dbh;

    //PDOクラス化
    public function __construct(){
        $dsn = "mysql:host=" .self::DB_HOST.";dbname=".self::DB_DATABASE.";charset=utf8";
        try{
            $this->dbh = new PDO($dsn, self::DB_USERNAME, self::DB_PASSWORD);
            echo 'DBと接続しました';
        } catch(PDOException $e) {
            exit('DBエラー' . $e->getMessage());
        }
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->dbh;
    }
}
*/