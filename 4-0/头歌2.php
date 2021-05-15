<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
语句：Where there is a will, there is a way.
<br>
特定单词：there
<br>
<?php
$manuscript = "Where there is a will, there is a way.";
$word = "there";
$smallLetter = 0;
$capitalLetter = 0;
$blank = 0;
$punctuation = 0;
/********** Begin *********/
$num=strlen($manuscript);
$arr=str_split($manuscript);//字符串分割为数组
foreach($arr as $key=>$value)
{
if($value==' ')
{
$blank+=1;
}
if('a'<=$value&&$value<='z')
{
$smallLetter+=1;
}
if('A'<=$value&&$value<='Z')
{
$capitalLetter+=1;
}
}
$punctuation=$num-$smallLetter-$capitalLetter-$blank;
$location = strpos($manuscript,$word);
/********** End *********/
echo '小写字母个数：'.$smallLetter."<br>";
echo '大写字母个数：'.$capitalLetter."<br>";
echo '空格个数：'.$blank."<br>";
echo '标点个数：'.$punctuation."<br>";
echo '特定单词位置：'.$location;
?>
</body>
</html>
