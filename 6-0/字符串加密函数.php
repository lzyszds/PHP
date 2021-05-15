<?php
    //php提供的crypt()可以加密字符串
    $pwd="123456";
    $pwdjm_php=crypt($pwd);
    echo $pwdjm_php;
    //或者用md5加密 md5加密很容易被破解，网上有解密
    echo '<br>';
    $pwdjm_md5=md5($pwd);
    echo $pwdjm_md5;
    //或者用md5加密 md5加密很容易被破解，网上有解密，这是加密版，这样没那么远被破解
    echo '<br>';
    $pwdjm_md5=md5($pwd.'qwedxze4');
    echo $pwdjm_md5;
    