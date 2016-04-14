<?php
include('conexionh.php');
$conexion=new conexion();
$conexion->conectar();
session_start();
//Se verifica el usuario y su contraseña   
$Contra = $_POST[Contra];
//*********************************************************************************


$sql = "select Id,Adm from visorRM where Id ='$Contra'";	
    $sql=$conexion->consulta($sql);	
	if(mysql_num_rows($sql)>0){	
		$con=mysql_fetch_array($sql);
		if($con[Id]==$Contra && $con[Adm]=='S'){
			$_SESSION["a1"]="1";
			$_SESSION["Id"]=$Contra;
			 header("Location:admRM.php");
		}		
		else{
			header("Location:admRM.html?DatosIncorrectos");		
		}
		
	}
	else{
			header("Location:admRM.html?NoseEncuentranLosDatos");
			}
	
?>