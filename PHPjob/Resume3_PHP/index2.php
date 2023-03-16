<html>

<!-- 入力フォーム -->
<form action="result2.php" method="post">
    名前：<input type="text" name="my_name" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
    <br>

    年齢：
    <select name="age">
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    </select>
    
    <!-- <select name="number">
    <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
        </option>
    <?php } ?>
    </select> -->
    <br>

    <!-- 隠しフォーム:画面には表示させませんが、フォームで送信できます。 -->
    <input type="hidden" name="hidden_param" value="隠しパラメータから" />
    <input type="submit" value="送信" />
</form>
</html>