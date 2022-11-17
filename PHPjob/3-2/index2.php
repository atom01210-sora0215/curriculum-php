<html>
<?php
//step1:フルーツと単価の連想配列を作成してください。
$fruits = ["りんご" =>"100", "みかん" => "50", "もも" => "300"];
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$quantity = [3, 3, 10];

// step2:単価を計算する関数を定義してください。引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function getAmount($value, $quantity) {
    global $amount;
    $amount = $value * $quantity;
}

//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
$i = 0;
foreach($fruits as $key => $value) {
    getAmount($value,$quantity[$i]);
    echo $key."は".$amount."円です。<br>";
    $i++;
}
