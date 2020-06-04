<!DOCTYPE html>
<html>
<head>
<body background="#FFFFFF">
<center><img src="logo.png" width=550 heigth=550></img>
<br><br>
<html>
	<head>
		<title>Inicio</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:150px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:;
				color:#000000;
				text-decoration:none;
				padding:4px 6px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#C0C0C0;
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
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>

	<body>
</body>
 <!--	
-->
<br><br><br>
<center>
<script>
function usrpas(){
if (document.form1.txt.value=="cobrador" && document.form1.num.value=="123")
{window.location="Cobrador";
return}
if (document.form1.txt.value=="suscriptor" && document.form1.num.value=="123")
{window.location="Suscriptor";}
else {alert("Error en Usuario o Contraseña. Intenta de nuevo.")}
}
document.oncontextmenu=new Function("return false");
</script>
<center>
<form name="form1"><font size=4>
USUARIO <input type="text" name="txt"><br/><br/>
CONTRASEÑA <input type="password" name="num"><br/><br/>
<input type="Button" value="Iniciar sesión" onClick="usrpas()"></font>
</form>
