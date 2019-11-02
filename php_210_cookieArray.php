<?php 
	$contenido = ['a', 'b', 'c', 'd',];
	//convierte array a string
	$listaContenido = implode(';' , $contenido);
	echo $listaContenido;
	setcookie('parametros',$listaContenido, time()+3600);



 ?>