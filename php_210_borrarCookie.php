<?php 
//borrar cookie
	$contador=0;
	if (isset($_COOKIE['contador'])) {
		setcookie('contador', null, time()-1);
	}
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