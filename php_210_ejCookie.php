<?php 
	if (isset($_COOKIE['contador'])) {
		$contador=$_COOKIE['contador']+1;
	} else {
		$contador=1;
	}
	setcookie('contador', $contador, time()+3600*24*365);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?=$contador?></h1>
</body>
</html>