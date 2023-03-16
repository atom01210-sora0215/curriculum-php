<?php
//step1:フルーツと単価の連想配列を作成してください。
$fruits = [
    "りんご" =>100,
    "みかん" => 50,
    "もも" => 300
];
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$num = [3, 3, 10];


// step2:単価を計算する関数を定義してください。引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function getPrice($fruits, $quantity){
    return $fruits * $quantity;
}

//foreach文の直前に $i = 0;と記述し、初期値を入れる
$i = 0;
//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。（foreach文を使用すると、１回の計算で、違う値を計算することができる。）
foreach ($fruits as $key => $value) {
    $goukei = getPrice($value, $num[$i]);
    echo $key."は".$goukei."円です。<br>";
    $i++;
}
