<html>
<?php
    $num = 1;
    while($num <= 100) {
        if($num % 3 == 0 && $num % 5 == 0) {
            echo 'FizzBuzz!!' . '<br>';
            $num++;
        } elseif ($num % 3 == 0) {
            echo 'Fizz!' . '<br>';
            $num++;
        } elseif ($num % 5 == 0) {
            echo 'Buzz!' . '<br>';
            $num++;
        } else {
            echo $num . '<br>';
            $num++;
        }
    }

?>








</html>