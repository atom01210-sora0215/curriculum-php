<html>

<!-- 入力フォーム -->
<!-- inputタグのname属性で箱を作る -->
<form action="result.php" method="post">
    名前：<input type="text" name="my_name" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    email：<input type="text" name="email" />
    <br>
    ご希望商品：
    <input type="radio" name="gift" value="A賞">A賞
    <input type="radio" name="gift" value="B賞">B賞
    <input type="radio" name="gift" value="C賞">C賞
    <br>

    個数：
    <select name="number">
    <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
        </option>
    <?php } ?>
    </select>
    <input type="submit" value="送信" />
</form>
</html>