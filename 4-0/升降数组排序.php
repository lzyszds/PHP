<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			function my_sort($arr){
				for($i=0;$i<count($arr);$i++){
					for($j=$i+1;$j<count($arr);$j++){
						if($arr[$i]>$arr[$j]){
							$tmp=$arr[$j];
							$arr[$j]=$arr[$i];
							$arr[$i]=$tmp;
						}
					}
				}
				return $arr;
			}
			$array=array(6,4,7,5,9,2);
			$sort_arr=my_sort($array);
			foreach($sort_arr as $num)
			echo $num;
		?>
	</body>
</html>
