<?php	
   include 'dbcon.php';
   mysqli_query($con, "insert into usuario(usuario,nombrecompleto,dni,email,telefono,clave,tipo_usuario) 
	values
	('$_POST[usuario]','$_POST[nombrecompleto]','$_POST[dni]','$_POST[email]','$_POST[telefono]', '$_POST[clave]', 2)") 
	or die("Problemas en el select".mysqli_error());
	mysqli_close($conexion);
	header('location:../index.php');
?>

