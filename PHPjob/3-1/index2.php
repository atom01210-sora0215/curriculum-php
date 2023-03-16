<html>
<?php
    $num = 1;
    while($num <= 100) {
        $fizz = $num % 3;
        $buzz = $num % 5;
        if($fizz === 0 && $buzz === 0) {
            echo 'FizzBuzz!!';
        } elseif ($fizz === 0) {
            echo 'Fizz!';
        } elseif ($buzz === 0) {
            echo 'Buzz!';
        } else {
            echo $num;
        }
        echo '<br>';
        $num++;
    }

?>
