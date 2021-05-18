<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<span style="font-size: 18px;">
    <table width=400 align="center" border="1">
        <tr><td align="center">PHP学习心得</td></tr>
        <tr><td>
    <?php
            function msubstr($str,$start,$len){
                $tmpstr="";
                $strlen = $start + $len;
                for($i=0;$i<$strlen;$i++){
                    if(ord(substr($str,$i,1))>0xa0){
                        $tmpstr.=substr($str,$i,2);
                        $i++;
                    }else{
                        $tmpstr.=substr($str,$i,1);
                    }
                }
                return $tmpstr;
            }
            $page=@$_REQUEST['page'];
            if($page == ""){
                $page=2;
            }
            if($page){
                $counter = file_get_contents("file.txt");
                $length = strlen($counter);
                $page_count = ceil($length/400);
                $c = msubstr($counter,0,($page-1)*400);
                $c1 = msubstr($counter,0,$page*400);
                echo substr($c1,strlen($c),strlen($c1)-strlen($c));
            }
    ?>
    </td></tr></table>
    <table align=center width=400>
        <tr>
            <td>页次：<?php echo $page;?>/<?php echo $page_count;?> 页</td>
            <td>分页:
            <?php 
                if($page != 1){
                    echo "<a href=funyet.php?page=1>首页</a>";

                    echo "<a href=funyet.php?page=".($page-1).">上一页</a>";
                }
                if($page<$page_count){
                    echo "<a href='funyet.php?page=".($page+1)."'>下一页</a>";
                    echo "<a href='funyet.php?page=".$page_count."'>尾页</a>";
                }
            ?>
            </td></tr>
            </table>
</span>

</body>
</html>
