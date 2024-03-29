<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)) {
    // POST送信されたpost_idを変数に格納しておく
    $post_id = $_POST["post_id"];
    // nameとcontentの入力チェック
    if (empty($_POST["name"])) {
        echo '名前が未入力です。';
    } elseif (empty($_POST["content"])) {
        echo 'コメントが未入力です。';
    }
    if (!empty($_POST["name"]) && !empty($_POST["content"])) {
        // name、contentを格納
        $name = $_POST["name"];
        $content = $_POST["content"];
        // PDOのインスタンスを取得
        $pdo_comments = db_connect();
        try {
            // SQL文の準備
            $sql_comments = "INSERT INTO comments (post_id, name, content) values (:post_id, :name, :content)";
            // プリペアドステートメントの準備
            $stmt_comments = $pdo_comments->prepare($sql_comments);
            // post_idをバインド
            $stmt_comments->bindParam(':post_id', $post_id);
            // nameをバインド
            $stmt_comments->bindParam(':name', $name);
            // contentをバインド
            $stmt_comments->bindParam(':content', $content);
            // 実行
            $stmt_comments->execute();
            // 対象のpost_idのdetail_post.phpにリダイレクト
            header("Location: detail_post.php?id=".$post_id);
            exit;
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
} else {
    // POSTで渡されたデータがなかった場合、GETで渡されたpost_idを受け取る
    // 前ページからpost_idが渡ってきます。このpost_idをキャッチすることで、どの記事に対するコメントか判断します。
    $post_id = $_GET['post_id'];
    // $post_idが空だった場合は不正な遷移なので、main.phpに戻す
    redirect_main_unless_parameter($post_id);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<h1>コメント</h1>
	<form method="POST" action="">
		<input type="hidden" name="post_id"
			value="<?php echo $post_id; //どの記事に対するコメントなのか、post_idもhidden送信します。?>">
		投稿者名:<br>
		<input type="text" name="name"> <br>
		コメント:<br>
		<input type="text" name="content" style="width:200px;height:100px;"><br>
		<input type="submit" value="submit">
	</form>
	<a href="detail_post.php?id=<?php echo $post_id; ?>">記事詳細に戻る</a>
</body>

</html>