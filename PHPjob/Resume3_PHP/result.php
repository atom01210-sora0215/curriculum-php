<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$gift = $_POST['gift'];
$number = $_POST['number'];

var_dump($_POST);
?>
<p>名前:<?php echo $my_name; ?></p>
<p>パスワード:<?php echo $password; ?></p>
<p>email:<?php echo $email; ?></p>
<p>ご希望景品:<?php echo $gift; ?></p>
<p>個数:<?php echo $number; ?></p>