<html>
<head>
	<title>Problema</title>

</head>
<body>
	<?php

	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");

	mysqli_select_db($conexion,"agenciarodeo") or
	die("Problemas en la selección de la base de datos");
	$registros=mysqli_query($conexion,"update usuario
		set usuario='$_REQUEST[usuario]', nombrecompleto='$_REQUEST[nombrecompleto]', dni='$_REQUEST[dni]', email='$_REQUEST[email]', telefono='$_REQUEST[telefono]', clave='$_REQUEST[clave]', tipo_usuario='$_REQUEST[tipo_usuario]'
     
		where id='$_REQUEST[id]'") or die("Problemas en el select:".mysql_error($conexion)); header ("location:../abmusuarios.php");

		?>
	</body>
	</html>
