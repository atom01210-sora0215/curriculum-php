<html>
<?php
//"post"で送信された値を$_POST（箱指定）で受け取る
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];
//$_GETでは連想配列でそれぞれの箱が収納されている（$_POSTにはない）
//$_GETではURLの後ろに?以降入力内容が表示される（$_POSTにはない）
//見られたくない、書き替えられ得たくないデータはPOSTで送信する。
var_dump($_POST);
?>

<!-- 変数に入れた値をHTMLに埋め込んで出力 -->
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<p>私のemailは、<?php echo $email; ?></p>

</html>