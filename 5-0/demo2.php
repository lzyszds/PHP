<?php
    $t_arr=[
        ["081101","王林","计算机"], 
        ["081102","程明","软件技术"],
        ["081103","李鑫","通讯技术"],
    ];
    echo "<h2>用each while老方法循环遍历数组</h2>";
    echo "<p>报错是提醒你不要使用each()这种老方法，不建议</p>";
    echo "<table border=1><tr><td>学号</td><td>姓名</td><td>专业</td></tr>";
    while(list($key,$value)=each($t_arr)){
        
        list($a,$b,$c)=$value;
        echo "<tr><td>".$a."</td><td>".$b."</td><td>".$c."</td></tr>";
    }
    echo "</table><hr>";
   
    echo "<h2>用foreach方法循环遍历数组</h2><table border=1><tr><td>学号</td><td>姓名</td><td>专业</td></tr>";
    foreach($t_arr as $key1 => $value1){
        echo "<tr>";
        foreach($value1 as $key2 => $value2){
            echo "<td>{$value2}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    