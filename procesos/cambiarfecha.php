	<?php

   include 'dbcon.php';

  

	mysqli_query($con, "update reserva
		set fecha_de_salida='$_REQUEST[Fecha]'

		where id='$_REQUEST[id]'")
        
	or die("Problemas en el select".mysqli_error());

	mysqli_close($conexion);
	
	header('location:../controlviajeusuario.php');
	?>
