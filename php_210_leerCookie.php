<?php 
	//existe la cookie
	if (isset($_COOKIE['contador'])) {
		//recupera la cookie
		$contador=$_COOKIE['contador']+1;
	} else {
		//inicializa la variable de la cookie
			$contador=1;
	}
	//asigna 
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