<?php
//inicio la sesi�n
session_start();
//comprueba que el usuario sea v�lido
if($_SESSION["a1"]!="1"){
	//si no existe, se dirige a la p�gina de inicio 
	header("Location:admRM.html");
	//salimos del script
	exit();
}
?>