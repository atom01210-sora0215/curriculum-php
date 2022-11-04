<html>
<?php
//step1:フルーツと単価の連想配列を作成してください。
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
$price = ["100" =>"100", "50" => "50", "300" => "300"];
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$quantity = [3, 3, 10];

//step2:単価を計算する関数を定義してください。引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function getAmount($price, $quantity) {
    $amount = $price * $quantity;
}
//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
foreach ($fruits as $key => $value) {
    echo $value."は".$amount."円です。"."<br>";
}
getAmount($price[0],$quantity[0]);
getAmount($price[1],$quantity[1]);
getAmount($price[2],$quantity[2]);



?>


</html>