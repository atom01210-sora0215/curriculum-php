<html>
<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$age = $_POST['age'];
//隠しフォーム
$hidden_param = $_POST['hidden_param'];

var_dump($_POST);
?>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<p>私の性別は、<?php echo $sex; ?></p>
<p>性別は、<?php echo $hidden_param; ?></p>
<p>年齢は、<?php echo $age; ?></p>

</html>