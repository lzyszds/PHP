<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
方程：x^2-4=0
<br>
解为：
<br>
<?php
/********** Begin *********/
function solve($a, $b, $c){
    $b=$a*$a+$c;
    echo $b;
}



/********** End *********/
$a = 1;
$b = 0;
$c = -4;
solve($a, $b, $c);
?>
</body>
</html>
