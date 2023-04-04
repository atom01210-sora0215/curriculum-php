<?php
$fruit_prices = ["りんご"=>100, "みかん"=>150, "もも"=>1500];
$fruit_counts = ["りんご"=>3, "みかん"=>"1", "もも"=> 2];

function calculatePrice($price, $count) {
    return $price * $count;
}

foreach ($fruit_prices as $fruit => $price) {
    $count = $fruit_counts[$fruit];
    $total_price = calculatePrice($price, $count);
    echo "{$fruit}は{$total_price}円です。<br>";
}
