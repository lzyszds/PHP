<?php
    //explode()函数可以将字符串元素转换成数组元素
    $str="I love you";
    $arr = explode(' ',$str);//以空格分割字符串为数组元素
    print_r($arr);