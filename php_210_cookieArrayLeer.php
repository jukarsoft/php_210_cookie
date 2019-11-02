<?php 
	//leer cookie
	$listaContenido= $_COOKIE['parametros'];
	//convierte string a array
	$Contenido = explode(';' , $listaContenido);
	print_r($Contenido);

 ?>