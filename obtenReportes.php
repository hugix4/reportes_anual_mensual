<?php
header("Content-Type: text/html;charset=utf-8");
require_once('conexionh.php');
$conexion=new conexion();
$conexion->conectar();

	echo"<style type='text/css'>
		a:hover{color:#cb9d01;}
	  p {
		font-family:Century Gothic, sans-serif;
		font-size:11%;
		color: #fff;
		}

		p4{
		font-family:Century Gothic, sans-serif;
		font-size:12%;
		color: #fff;
		}

		
		.headers{
		font-size:12px;
		color: #000066;
		}
		
		.tablin{
		font-size:11px;
		color: #fff;
		}
		
		div.tabla_centro{
		text-align: center;
		}

		div.tabla_centro table {
		margin: 0 auto;
		text-align: center;
		}			
		
	</style>";

	$t = $_GET['t'];
	$f = $_GET['f'];
	
		if($t=='L'){
		echo "<b>Laboratorios</b>";
		}
		else if($t=='M'){
		echo "<b>Mediatecas</b>";
		}
		echo "<table border='1' class='headers' align='center' width='100%' cellpadding='0' cellspacing='0'>
			<tr>
				<td width='5%'><font color='#000066'><b>Fecha</b></font></td>
				<td width='5%'><font color='#000066'><b>ENP1</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP2</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP3</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP4</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP5</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP6</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP7</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP8</b></font></td>
				<td width='6%'><font color='#000066'><b>ENP9</b></font></td>
				<td width='6%'><font color='#000066'><b>Azc</b></font></td>
				<td width='6%'><font color='#000066'><b>Nau</b></font></td>
				<td width='6%'><font color='#000066'><b>Ote</b></font></td>
				<td width='6%'><font color='#000066'><b>Sur</b></font></td>
				<td width='6%'><font color='#000066'><b>Vallejo</b></font></td>
				<td width='6%'><font color='#000066'><b>Iniciacion</b></font></td>
				<td width='6%'><font color='#000066'><b>Derecho</b></font></td>
			</tr>
		</table>";
		
		
		$sql="SELECT * FROM visorRM WHERE Ciclo='$f' and Tipo='$t'";
		$sql=$conexion->consulta($sql);
		
		
		
		while($row=mysql_fetch_array($sql)){
			echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>		
				";
					$var1=$row["Fecha"];					
					$var2="ago-";
					$var3="oct-";
					$var4="ene-";
					$var5="mar-";
					$var6="may-";
					if(strstr($var1,$var2) || strstr($var1,$var3) || strstr($var1,$var4)|| strstr($var1,$var5) || strstr($var1,$var6)){
					echo "
					<tr>
					<td width='5%'><font color='#000000'>".$row["Fecha"]."</font></td>
					<td width='5%'><font color='#000000'>".$row["ENP1"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP2"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP3"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP4"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP5"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP6"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP7"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP8"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP9"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Azc"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Nau"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Ote"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Sur"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Vall"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["ENP2i"]."</font></td>
					<td width='6%'><font color='#000000'>".$row["Der"]."</font></td>
					</tr>";
					}
					else{
					echo"
					<tr>
					<td width='5%'>".$row["Fecha"]."</td>
					<td width='5%'>".$row["ENP1"]."</td>
					<td width='6%'>".$row["ENP2"]."</td>
					<td width='6%'>".$row["ENP3"]."</td>
					<td width='6%'>".$row["ENP4"]."</td>
					<td width='6%'>".$row["ENP5"]."</td>
					<td width='6%'>".$row["ENP6"]."</td>
					<td width='6%'>".$row["ENP7"]."</td>
					<td width='6%'>".$row["ENP8"]."</td>
					<td width='6%'>".$row["ENP9"]."</td>
					<td width='6%'>".$row["Azc"]."</td>
					<td width='6%'>".$row["Nau"]."</td>
					<td width='6%'>".$row["Ote"]."</td>
					<td width='6%'>".$row["Sur"]."</td>
					<td width='6%'>".$row["Vall"]."</td>
					<td width='6%'>".$row["ENP2i"]."</td>
					<td width='6%'>".$row["Der"]."</td>
					</tr>";
					}
			echo"
			</table>";
		}//Fin del while	
	

$conexion->desconectar();
?>