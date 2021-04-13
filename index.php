<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h2>梯形的长<input type="text" name="A"></h2>
        <h2>梯形的宽<input type="text" name="B"></h2>
        <h2>梯形的高<input type="text" name="H"></h2>
        <h2><input type="submit" name="postmehos" value="POST提交方式"></h2>
    </form>
    <?php
        
        if(isset($_POST['postmehos'])){
            $a= $_POST['A'];
            $b= $_POST['B'];
            $h= $_POST['H'];
            $T_area=($a+$b) * $h/2;
            echo '<P>梯形的面积为'.$T_area.'</P>';
        }
    ?>
</body>

</html>