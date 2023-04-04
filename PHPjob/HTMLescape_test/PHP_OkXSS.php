<html>
<body>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
<!-- 「<script>alert('XSSの危険')</script>」を入力 -->
<input type="text" name="textbox" value="" />
<input type="submit" value="送信" />
</form>
入力文字：
<?php
if (isset( $_POST["textbox"] )){
  print htmlspecialchars( $_POST["textbox"] );
}

?>
</body>
</html>