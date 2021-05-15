<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
个人信息：小明 14 湖南长沙 打羽毛球 周杰伦
<br>
自我介绍：
<?php
error_reporting(0);
$name = "小明";
$age = "14";
$hometown = "湖南长沙";
$hobby = "打羽毛球";
$singer = "周杰伦";
/********** Begin *********/

$txt='大家好，我叫'.$name.'，今年'.$age.'，来自'.$hometown.'。平日里爱好'.$hobby.'，喜欢听'.$singer.'的音乐。';

/********** End *********/
echo $txt;
?>
</body>
</html>
