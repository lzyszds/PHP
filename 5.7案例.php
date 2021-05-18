<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        div,
        td {
            text-align: center;
        }

        table {
            margin: 0 auto;
        }

        p {
            font-size: 18px;
            color: #ff0000;
            text-align: center;

        }
    </style>
</head>

<body>
    <form name='frl' method="post">
        <table border="1">
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>成绩</td>
            </tr>
            <?php
                for($i=0;$i<5;$i++){
            ?>
            <tr>
                <td><input name="XH[]"></td>
                <td><input name="XM[]"></td>
                <td><input name="CJ[]"></td>
            </tr>
            <?php }; ?>
            <tr>
                <td colspan="3">
                    <input type="submit" name="bt_stu" value="提交">
                </td>
            </tr>
        </table>
        <p>注意学号不能重复</p>

    </form>

    <?php
    if(isset($_POST['bt_stu'])){
        $XH = $_POST['XH'];
        $XM = $_POST['XM'];
        $CJ = $_POST['CJ'];
        array_multisort($CJ,$XH,$XM);
        for($i=0;$i<count($XH);$i++)
        $sum[$i] = array($XH[$i],$XM[$i],$CJ[$i]);
        
        echo "<div>排序后的成绩表如下：</div>";
        echo "<table border=2><tr><td>学号</td><td>姓名</td><td>成绩</td><tr>";
        foreach($sum as $value){
            list($stu_number,$stu_name,$stu_score)=$value;
            echo "<tr><td>$stu_number</td><td>$stu_name</td><td>$stu_score</td></tr>";
        };
        echo "</table><br>";
        reset($sum);
        foreach ($sum as $value) {
            list($stu_number,$stu_name,$stu_score)=$value;
            if($stu_number == "081101"){
                echo "<p align=center>";
                echo $stu_number."的姓名为:".$stu_name.",";
                echo "成绩为：".$stu_score;
                break;
            }
        }
    }
    ?>
</body>

</html>