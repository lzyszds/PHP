<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lzy=@date('D');
        echo $lzy;
        switch($lzy){
            case "Mon":echo "今天是星期一";break;
            case "Tue":echo "今天是星期二";break;
            case "Wed":echo "今天是星期三";break;
            case "Thu":echo "今天是星期四";break;
            case "Fri":echo "今天是星期五";break;
            case "Sat":echo "今天是星期六";break;
            case "Sun":echo "今天是星期天";break;
        }
    ?>
</body>
</html>