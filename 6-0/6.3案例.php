<form action="" name="fl" method="post">
    <font face="方正舒体" size=4>您的Email地址：</font><br>
    <input type="text" name="Email" size="31"><br>
    <font face="方正舒体" size=4>您的留言：</font><br>
    <textarea name="note" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="bt1" value="提交">
    <input type="reset" name="bt2" value="清空">
</form>
<?php
    if(isset($_POST['bt1'])){
        $Email = $_POST['Email'];
        $note  = $_POST['note'];
        if(! $Email ||  !$note)
        echo "<script>alert('Email地址和留言请填写完整')</script>";
        else{
            $array = explode("@",$Email);
            if(count($array)!=2){
                echo "<script>alert('邮箱地址错误')</script>";
            }else{
                $username = $array[0];
                $netname=$array[1];
                if(strstr($username,'.') or strstr($username,',')){
                    echo "<script>alert('邮箱地址格式错误')<script>";
                }
                else{
                    $newnote = str_replace("我","本人",$note);
                    echo "<font face='黑体' size=4>";
                    echo "用户".$username."您好!&nbsp;,";
                    echo "你是".$netname."网友!&nbsp;";

                    echo "<br>您的留言是:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$newnote."<br>";
                    echo "</font>";
                }
            }
        }
        
    }