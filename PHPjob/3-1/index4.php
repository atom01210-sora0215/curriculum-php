<?php
foreach(range(1,100) as $i){
    if(($i % 3 == 0 && $i % 5 ==0)) {
        echo "FizzBuzz";
    }else if($i % 3 == 0){
        echo "Fizz";
    }else if($i % 5 == 0){
        echo "Buzz";
    }else{
        echo $i;
    }
        echo '<br>';
}