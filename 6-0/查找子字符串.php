<?php

    $str1="I love PHP";
    if(stristr($str1,'php')){
        echo "有PHP";
    }else{
        echo "没有php";
    };
    echo "<br>";
   // stristr($str1,'php';//查找子字符串，不区分大小写
    if(strstr($str1,'php')){
        echo "有PHP";
    }else{
        echo "没有php";
    };
   //区分大小写其他用法基本一致就是比上面那个少了一个i
    