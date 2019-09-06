	<?php
	session_start();
   include 'dbcon.php';

  

	mysqli_query($con, "insert into reserva(linea,fecha_de_salida,hora_de_salida,tipo_de_asiento,cantidad_tickets,nombre) 
		values
		('$_POST[linea]','$_POST[fecha_de_salida]','$_POST[hora_de_salida]','$_POST[tipo_de_asiento]','$_POST[cantidad_tickets]', '$_SESSION[nombre]')") 
        
	or die("Problemas en el select".mysqli_error());

	mysqli_close($conexion);
	
	header('location:../includepas.php');
	?>

