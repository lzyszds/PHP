<?php

    $str1=" hello 你好世界 ";
    $str2=' hello 你好世界a';
    echo trim($str1).'<br>';
    echo trim($str2,'a');
    //第二个参数是指定你要选择的删除的字符