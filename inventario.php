<!DOCTYPE html>
<html>
<head>
	<title>MIKY'S</title>
		
</head>
<body background="2.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: 100%; ">
	<hr size="8" color="purple">
 <a href="index.html"><img src="5.1.png" width="280" height="150"></a>

	<table align="right" border="0" widht="150%">

		<td><font size="6"><a href="index.html"><img src="2.2.png" width="180" height="110"></a></font></td>
		<td><font size="6"><a href="Catalogos.html"><img src="catalogo.png" width="180" height="110"></a></font></td>
		<td><font size="6"><a href="contactos.html"><img src="contactos.png" width="180" height="110"></a></font></td>
		<td><font size="6"><a href="inventario.html"><img src="inventario.png" width="180" height="110"></a></font></td>
		<td><font size="6"><a href="cuestionario.php"><img src="cuestionario.png" width="180" height="110"></a></font></td>
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

<center>

<br>
   	  
<table border="0" >

<tr>
<th colspan="2"  width="50%" height="80"><font color="white" face="verdana" style="font-size:  20px" >Salida del proceso</font></th>
</tr>
			
	
		<?php

		$Cantidad=$_POST['C'];
		$ValorV=$_POST['V'];
		$Categoria=$_POST["categoria"];
		$Des=$_POST["Descripcion"];

		$Subtotal=$Cantidad*$ValorV;

	

		if (isset($_POST['Efectivo'])) {
       
            $hola="Efectivo";
            $descuento=($Subtotal*10)/100;
            $Total=($Subtotal-$descuento);


        }

        if (isset($_POST['Tarjeta'])) {


            $hola="Tarjeta";
            $descuento=($Subtotal*5)/100;
            $Total=($Subtotal-$descuento);
        }

        

	


		echo"<tr>";
		echo"<td width='50%' height='20'></td></tr>";		
		echo"<tr>";
		echo "<td width='50%' height='50'><font color='white' face='verdana' style='font-size:  18px' ><b>Descripcion</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' > $Categoria,  $Des   $</font></td></tr>";
		echo "<tr>";
		echo "<td width='50%' height='50'><font color='white' face='verdana' style='font-size:  18px' ><b>Cantidad Vendidad</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' >$Cantidad</font></td></tr>";
		echo "<tr>";
		echo "<td width='50%' height='50'><font color='white' face='verdana' style='font-size:  18px' ><b>Valor unitario</b></font></td><td><font color='white' face='verdana' style='font-size:  18px' >$ValorV</font></td></tr>";
	
	    echo "<tr>";	

      	echo "<td width='50%' height='50'><font color='white'face='verdana' style='font-size:  18px' ><b>Forma de pago</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' >$hola</font></td></tr>";

      				
		echo "<tr>";
		echo"<td width='50%' height='20'></td></tr>";		
		echo "<tr>";
		echo "<th colspan='2' width='50%' height='100'><font color='white' face='verdana' style='font-size:  20px' >Procesos realizados</font></th></tr>";
		echo "<tr>";
		echo "<td width='50%' height='50'><font color='white' face='verdana' style='font-size:  18px' ><b>Valor Venta</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' >$Subtotal</font></td></tr>";
		echo "<tr>";
		echo "<td width='50%' height='50'><font color='white' face='verdana' style='font-size:  18px' ><b>Valor del descuento</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' >$descuento</font></td></tr>";
		echo "<tr>";
		echo "<td width='50%' height='50'><font color='white'face='verdana' style='font-size:  18px' ><b>Total a pagar</b></font></td> <td><font color='white' face='verdana' style='font-size:  18px' >$Total</font></td></tr>";



		?>

</table>
</center>

<br>
<br>
<br>

<a href="inventario.html"><font color='aqua'face='verdana' style='font-size:  18px' >Inicio</font></a>
  

</body>
</html>