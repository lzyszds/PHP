<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1;text-align: center; width: 500px;">
    <?php
        $eee=0;
        while($eee<10){
            $bgcolor = $eee%2 == 0 ? "#fff" : "#ddd";
            echo "<tr style='background-color:".$bgcolor."'>";
            $in=0;
            while($i<10){
                echo "<td>".($eee*10+$in)."</td>";
                $in++;
            };
            echo "</tr>";
            $eee++;
        };
    
    ?>
    </table>
</body>
</html>