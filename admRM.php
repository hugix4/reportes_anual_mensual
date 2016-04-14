<?php
require('secure_adrm.php');
require_once('conexionh.php');
$conexion=new conexion();
$conexion->conectar();
session_start();
?>
<html>
	<head>
		<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
		 <!--[if lt IE 9]> 
		<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
		</script> 
		<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			
			$('ul.tabs li').click(function(){
				var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
				})

			})
			
			function muestraInfo(lab,fecha) {			
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  document.getElementById("numEn").innerHTML=xmlhttp.responseText;
				}
			  }			  
			  xmlhttp.open("GET","obtenReportes.php?t="+lab+"&f="+fecha,true);
			  xmlhttp.send();
			}
		</script>
			
			
		</script>
				 
		<!--<div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
			<table border=0 width="100%"><tr><td align="center">
				<map name="CGLh"> 
					<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
					<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
				</map>
			</table>
		</div>-->
	</head>	
	<body>
	
		<style>
			.container{
				width: 100%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
			
			div.tabla_centro{
			text-align: center;
			}

			div.tabla_centro table {
			margin: 0 auto;
			text-align: center;
			}
			
			.tablin1{
				font-size:16px;
				color: #fff;
				border-collapse: separate; border-spacing: 20px;
				}
				
			.tablin{
				font-size:16px;
				color: #fff;				
				}
			
		</style> 
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
		<div id="menu">			
			<ul class="menu">
				</br><b style="color: #000066;">Visor de reportes mensuales</b>										
			</ul>
		</div>
		
		
	<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

		<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
			<section id="main"><!-- contenido principal y menus laterales -->				        		
				<br/>
				<div class="container">
					<ul class="tabs">
						<li class="tab-link current" data-tab="tab-1"><b>Resultados</b></li>
					</ul>
					<div id="tab-1" class="tab-content current">			
						<form align='center' id="examen" action="result.php" method="POST">
						
						<div class='tabla_centro'>
							<?php
							echo "
							<table border='0' class='tablin1' align='center' width='100%' cellpadding='10' cellspacing='0'>
							<br/>
							<br/>
							<tr>
							<th colspan='2'>Laboratorios</th>
							<th colspan='2'>Mediatecas</th>
							</tr>
							<tr>
							<td><button type='button' onclick=muestraInfo('L','1112')>Laboratorios 2011-12</button></td>
							<td><button type='button' onclick=muestraInfo('L','1213')>Laboratorios 2012-13</button></td>							
							<td><button type='button' onclick=muestraInfo('M','1112')>Mediatecas 2011-12</button></td>
							<td><button type='button' onclick=muestraInfo('M','1213')>Mediatecas 2012-13</button></td>							
							</tr>
							<br/>
							<tr>
							<td><button type='button' onclick=muestraInfo('L','1314')>Laboratorios 2013-14</button></td>
							<td><button type='button' onclick=muestraInfo('L','1415')>Laboratorios 2014-15</button></td>
							<td><button type='button' onclick=muestraInfo('M','1314')>Mediatecas 2013-14</button></td>
							<td><button type='button' onclick=muestraInfo('M','1415')>Mediatecas 2014-15</button></td>
							</tr>
							</table>";
							echo "<br/><br/><div id='numEn'><b>Resultados</b></div>";							
							
							echo "<br/><br/><button type='button'><a href='saliradpd.php' style='color:black'>Cerrar Sesión</a></button>";
							
							?>				
						</div>
					</div>	<!--Tab 1 -->
				</div><!-- container --><br/><br/>
			
			
			
			
			</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
			<footer>
				<section id="footer-area">
					<section id="footer-outer-block">
							<aside class="footer-segment">
										<ul>									
											<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2014. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
											
										</ul>
							</aside><!-- primer columna del footer -->		
					</section><!-- Aqui se termina el footer editable -->
				</section><!-- Fin del espacio del footer -->
			</footer>
		</div><!-- Fin de la "envoltura" -->
	<!--Ingeniero Hugo Luna a.k.a. hugix4-->
	</body>
</html>