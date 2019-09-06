<?php
session_start();
		include ('dbcon.php');
		if (isset($_POST['login']))
		{
			//quita los esspacios mysqli_real_escape_string para poder realizar la conulta
			$username = mysqli_real_escape_string($con, $_POST['usuario']);
			$password = mysqli_real_escape_string($con, $_POST['clave']);
			
			$query 		= mysqli_query($con, "SELECT u.id as id, u.usuario as usuario, t.nombre as tipo_usuario from usuario u , tipo_usuarios t where u.tipo_usuario=t.id and   clave='".$password."' and usuario='".$username."'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if ($num_row > 0) 
			{			
				// crea la sesion
				$_SESSION['id']=$row['id'] ;
				$_SESSION['nombre']=$row['usuario'] ;

				$_SESSION['tipo'] = $row['tipo_usuario'];
				
								
			

			}
			
			else
			{
				echo 'Usuario o contraseña invalidos';
			}
		}
if(!empty($_SESSION)){
 	header('location:session.php');
} 
		?>
		