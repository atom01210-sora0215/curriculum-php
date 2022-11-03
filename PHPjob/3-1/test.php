<html>
<?php
    $num = 1;
    $fizz = $num % 3;
    $buzz = $num % 5;
    while($num <= 100) {
        if($fizz == 0 && $buzz == 0) {
            echo 'FizzBuzz!!' . '<br>';
            $num++;
        } elseif ($fizz == 0) {
            echo 'Fizz!' . '<br>';
            $num++;
        } elseif ($buzz == 0) {
            echo 'Buzz!' . '<br>';
            $num++;
        } else {
            echo $num . '<br>';
            $num++;
        }
    }
?>








</html>