<?php
    $a=10;$b=5;
    $i=0;
    while($i>$b){
        if($a%$i==0&&$b%$i==0){
            echo $i;
        }
            $i++;
    }