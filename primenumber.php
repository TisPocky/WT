<?php
    $x=10;
    $y=50;
    echo("The prime number form $x to $y is:<br>");
    for ($i=$x;$i<=$y;$i++){
        primenum($i);
    }
    function primenum($num){
        $n=0;
        for($i=2;$i<=($num/2);$i++){
            if($num%$i==0){
                ++$n;
                break;
            }
        }
        if($n==0){
            echo $num."\n";
        }
    }

?>