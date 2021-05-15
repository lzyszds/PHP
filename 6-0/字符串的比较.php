<?php
    //如果$str1比$str2大则会返回大于0 的整数(1),如果$str1比$str2大则会返回小于0 的整数(-1),如果$str1与$str2相等则会返回0 ,
    $str1="aBc";
    $str2="abc";
    echo strcmp($str1,$str2).'<br>';//strcmp用于区分大小写的比较,
    echo strcasecmp($str1,$str2).'<br>';//strcasecmp用于不区分大小写的比较,
    echo strncmp($str1,$str2,3).'<br>';//strncmp用于比较字符串的一部分(区分大小写)，从头开始比较,第三个参数是要比较的长度
    echo strncasecmp($str1,$str2，3).'<br>';//strncasecmp(不区分大小写),第三个参数是要比较的长度,strcmp用于不区分大小写的比较,