<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title>MIKY'S</title>
		
</head>
<body background="fondo-celebracion-cielo-azul_37499-11.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: 100%; ">
	<hr size="8" color="purple">
 <a href="index.html"><img src="Logo2.png" width="250" height="150"></a>

	<table align="right" border="0" widht="150%">

		<td><font size="6"><a href="index.html"><img src="2.2.png" width="170" height="140"></a></font></td>
		<td><font size="6"><a href="misionyvision.html"><img src="misionyvision.png" width="170" height="140"></a></font></td>
		<td><font size="6"><a href="Catalogos.html"><img src="catalogo.png" width="170" height="140"></a></font></td>
		<td><font size="6"><a href="contactos.html"><img src="contactos.png" width="170" height="140"></a></font></td>
		<td><font size="6"><a href="inventario.html"><img src="inventario.png" width="170" height="140"></a></font></td>
		<td><font size="6"><a href="cuestionario.php"><img src="cuestionario.png" width="170" height="140"></a></font></td>
	</table>
	<link rel="stylesheet" href="style.css">

  
</head>

<body>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/+573142517381?text=Hola%20necesito%20informacion" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  
  

</body>

</html>
	<br>
	<br>
	<hr size="8" color="purple">
	<p>
	</p>
	<center>
	<div id="breadcrumbs">
		<font color="black" face="verdana" size="5">
 <a href="index.html"><font color="black" face="verdana">Inicio</a> 
  >
  <a href="misionyvision.html"><font color="black" face="verdana">Mision y vision</a>
  >
  <a href="Catalogos.html"><font color="black" face="verdana">Catalogos</a>
  >
  <a href="contactos.html"><font color="black" face="verdana">contactos</a>
  >
  <a href="inventario.html"><font color="black" face="verdana">inventario</a>
  >
  <a href="Cuestionario.php"><font color="black" face="verdana">Cuestionario</a>
</div>
</font>
</center>
<p>
	</p>
<hr size="8" color="purple">

<input type="button" value="Volver" onClick="history.go(-1);">

<br>
<br>
	
<font color="black" face="verdana" size"10"><b>
<?php

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$Sexo = $_POST['Sexo'];

echo "Gracias " . $Nombres . " " . $Apellidos . " Tus datos han sido guardados satisfactoriamente, Con esto nos ayudas a mejorar nuestro servicio. <br>";
echo "Tu correo es: <br>";
echo "Correo: " . $Correo . "<br>";

if($Sexo == "Mujer" ){
echo " <br>";
}else if($Sexo == "Hombre"){
	echo " ";
}else{
	echo " ";
}


?>