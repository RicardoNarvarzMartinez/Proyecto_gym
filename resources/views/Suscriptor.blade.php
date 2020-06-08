@extends('plantillas.plantilla_suscriptor')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SUSCRIPTOR</title>
<style type="text/css">
<!--
.style5 {
	color: #FFFFFF;
	font-family: Chiller;
	font-size: 36px;
}
.style6 {
	font-size: 18px;
	font-weight: bold;
	font-family: gothic;
}
-->
</style>
</head>
<html>
	<head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:400px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#FF99CC;
				color:#000000;
				text-decoration:none;
				padding:2px 4px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#00BFFF;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-420px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
	<button type="button" class="btn btn-primary"><a href="/">Salir</button></a>

	<br>
	<h1><center>SUSCRIPTOR BIENVENIDO</center></h1>
		<div id="header">
			<ul class="nav">
			<li><a href="/Estatus">Cuenta</a>
			  </li>
			<li><a href="/pago">Pagos</a>
			  </li>
			<li><a href="/Servicio">Servicios</a>
              </li>
			</ul>
		</div>
</body>
</html>
