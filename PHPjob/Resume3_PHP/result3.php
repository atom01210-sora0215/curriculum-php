<html>
<?php
$my_name = $_POST['my_name'];
$gift = $_POST['gift'];
$number = $_POST['number'];
//隠しフォーム
$hidden_param = $_POST['hidden_param'];

var_dump($_POST);
?>

<p>お名前：<?php echo $my_name; ?></p>
<p>ご希望商品：<?php echo $gift; ?></p>
<p>個数：<?php echo $number; ?></p>

</html>