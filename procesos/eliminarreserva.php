<html>

<head>
	<title>Problema</title>
</head>

<body>
	<?php
	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
	mysqli_select_db($conexion, "agenciarodeo") or

	die("Problemas en la selección de la base de datos");
	$registros=mysqli_query($conexion,"select id from reserva
		where id='$_REQUEST[id]'") or

	die("Problemas en el select:".mysqli_error($conexion)); if ($reg=mysqli_fetch_array($registros)) 

		mysqli_query($conexion, "delete from reserva where id='$_REQUEST[id]'") or die("Problemas en el select:".mysqli_error($conexion));

		header ("location:../abmviajes.php")
	
	
	

	
	?>
</body>
</html>
