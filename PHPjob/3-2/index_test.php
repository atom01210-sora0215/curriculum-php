<html>
<?php
// //step1:フルーツと単価の連想配列を作成してください。
// $fruits = [
//     "りんご" =>100,
//     "みかん" => 50,
//     "もも" => 300
// ];
// //配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
// $quantity = [
//     "りんご" =>3,
//     "みかん" => 3,
//     "もも" => 10
// ];
// //foreach文の直前に $i = 0;と記述し、初期値を入れる
// $i = 0;

// // step2:単価を計算する関数を定義してください。引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
// function getPrice($fruits, $quantity){
//     $price = $fruits * $quantity;
//     return $price;
// }

// //step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
// foreach ($fruits as $key => $value) {
//     $amount = getPrice($value, $quantity[$i]);
//     echo $key."は".$amount."円です。<br>";
//     $i++;
// }
echo '<br><br>';

// step1:フルーツと単価の連想配列を作成してください。
$cost = ["apple"=>150,"orange"=>50,"peach"=>600];
$num = ["apple"=>2,"orange"=>3,"peach"=>5];

// step2:単価を計算する関数を定義してください。

// 仮定:単価と個数を引数として、果物ごとに合計の値段を返したい。
function value($price,$buy) {
    return $price * $buy;
}

// step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
$name = ["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

foreach ($name as $nE => $nJ) {
    $vl = value($cost[$nE] , $num[$nE]);
    echo "${nJ}は${vl}円です。";
    echo '<br>';
}