<?php
    //str_replace对大小写敏感，只能一对一，不能多对多
    $str="I love you";
    $replace="lucy";
    $end=str_replace("you",$replace,$str);//第一个参数是指要被替换的字符串,第二个是指要替换的上去的值,第三个是指所要替换的总字符串
    echo $end.'<br>';
    //substr_replace对大小写敏感，既可以多对多，也可以一对一
    echo substr_replace($str,"OK",3,3);
    //第一个参数是你要修改的字符串,第二个是你要替换上去的字符串
    // 第三个是你要替换的位置。从左到右0开始,第四个是你要替换的长度，不写则默认(后面的所有字符串统统取代)