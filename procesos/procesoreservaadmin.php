<?php

     include 'dbcon.php';
     $registros=mysqli_query($con,"update reserva
		set nombre='$_REQUEST[Cliente]', fecha_de_salida='$_REQUEST[Fecha]', hora_de_salida='$_REQUEST[Hora]', tipo_de_asiento='$_REQUEST[Tipo]', cantidad_tickets='$_REQUEST[tickets]', paquete='$_REQUEST[paquete]', estado_de_ticket='$_REQUEST[estado]', hospedaje='$_REQUEST[hospedaje]'
     
		where id='$_REQUEST[id]'")  or die("Problemas en el select:".mysql_error($con)); header ("location:../abmviajes.php");	
     ?>
	
