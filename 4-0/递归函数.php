<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			function text($n){
				echo $n."&nbsp;";
				if($n>0){
					text($n-1);
				}else{
					echo "<br><--------------------><br>";
				}
				echo $n."&nbsp;";
			}
			text(10);
		?>
	</body>
</html>
