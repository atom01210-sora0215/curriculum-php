<html>
<p class="pstyle">配列・連想配列</p>
<style>
	.pstyle {
		font-size: 20px;
		text-decoration: underline;
	}
</style>

<?php
$country_1 = "America";
$country_2 = "Japan";
$country_3 = "China";
$country_4 = "Korea";
echo $country_1;
echo $country_2;
echo $country_3;
echo $country_4;
echo '<br/>';
?>

<?php
// 配列の各要素を出力（配列：機械的に順番に処理）
$countries = ["America", "Japan", "China", "Korea"];
echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
echo '<br/>';

// 配列全体を表示させる
var_dump($countries);
echo '<br><br/>';

// 連装配列（連装配列：特定の要素にアクセスする場合）
$fruits = ["りんご", "みかん", "ぶどう"];
// 0番目のりんごを出力
echo $fruits[0];
echo '<br/>';
// 1番目のみかんを出力
echo $fruits[1];
echo '<br/>';
// 2番目のぶどうを出力
echo $fruits[2];
echo '<br/>';
$fruits[] = "もも";
// 配列全体を出力
var_dump($fruits);
echo '<br><br/>';

$fruit_arr = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
// りんごを出力
echo $fruit_arr["apple"];
// みかんを出力
echo $fruit_arr["orange"];
// ぶどうを出力
echo $fruit_arr["grape"];
echo '<br/>';
var_dump($fruit_arr);
echo '<br/>';

// 配列の追加。0、1、2番目はもうつかわれているので、次は3番目
$fruit_arr[3] = "もも";
// 配列の追加。連番で良いという場合は、プログラムが勝手に判断して順番をつけてくれる
$fruit_arr[] = "すもも";
var_dump($fruit_arr);
echo '<br/>';
// 連装配列の追加。名前をつける必要がある
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
$fruits["peach"] = "もも";
echo '<br><br/>';
?>


<!-- チャレンジ -->
<?php
    $color = ["red" => "赤", "bule" => "青", "green" => "緑"];
var_dump($color);
echo '<br/>';
$color["yellow"] = "黄色";
var_dump($color);
echo '<br/><br/>';
?>

<html>
<p class="pstyle">foreach</p>
<style>
	.pstyle {
		font-size: 20px;
		text-decoration: underline;
	}
</style>

<?php
//foreach: 配列の中の要素を全て出力する（ループ文の一種。配列$fruitsから、変数$valueに順番に入る）
$fruits = ["りんご", "みかん", "もも"];
foreach ($fruits as $value) {
    echo $value;
    echo '<br/>';
}
//連想配列の場合（ループ文の一種。配列$fruitsから、キー$keyと値$valueに順番に入る）
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br/>';
}
echo '<br>';
?>

<!-- チャレンジ -->
<?php
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value) {
    echo $key . 'といったら' . $value;
    echo '<br/>';
}
?>



<p class="pstyle">関数</p>
<style>
	.pstyle {
		font-size: 20px;
		text-decoration: underline;
	}
</style>
<p>関数を使うメリットはよく使う処理をまとめることにより、コード量の削減ができることと保守や改修が容易になることです。</p>

<?php
// 関数・引数
function getTriangleArea($base, $height)
{
    $area = $base * $height / 2;
    echo "三角形の面積は".$area."だよ。";
}
// 1)
getTriangleArea(10, 5);
// 2)
getTriangleArea(15, 8);
// 3)
getTriangleArea(8, 6);
echo '<br>';


// ローカル変数
// 関数の中で定義する変数 => ローカル変数（その関数の中でしか有効にならない。）
// 関数の外では、関数内での値の変更は無視されてしまいます。（変数のスコープ）
http://php.net/manual/ja/language.variables.scope.php
$myname = "ruby";
function sayHi($name = "goto")
{
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}
echo sayHi();
echo $myname;
echo '<br>';
?>


<!-- チャレンジ -->
<?php
function getSquareArea($x, $y, $d)
{
    $area = $x * $y * $d;
    echo "直方体の体積は".$area."cm3だよ。";
}
getSquareArea(5, 10, 8);
echo '<br>';
?>

</html>