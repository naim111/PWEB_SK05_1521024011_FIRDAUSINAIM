<html>
<head>
    <title>SK 5_3 frdaus</title>
	<style>
		table, td {
			border: 3px solid blue;
			border-collapse: collapse;
		}
		td {
			padding: 7px;
		}
		table#a 	{
			text-align:center;
		}

	</style>
</head>
<body>
	<table id="a">
    <?php
	
	$n =5;
	for($j=0;$j<=95;$j++){
		$i=5;
		$i=$i+$j;
		$bil[$j][0]=$i;
		for($a=0;$a<=998;$a++){
			if ($a<=0){
				$n=$i;
			}
			$n=$n+5;
			$bil[$j][$a+1]=$n;
		}
	}
	"</table>";
    ?>
</body>
</html>