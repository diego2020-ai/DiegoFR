


	<?php
        session_start();
        include 'dbcon.php';
       
	if(isset($_POST['l']))
        {
            $r = "UPDATE reserva SET  paquete=".$_POST['paquete'].", hospedaje=".$_POST['hospedaje']." WHERE nombre='".$_SESSION['nombre']."'";
            var_dump($r);
	mysqli_query($con, $r)  
         
	or die("Problemas en el select".mysqli_error());

	mysqli_close($con);
	
	header('location:../controlviajeusuario.php');
        
        }else if(isset($_REQUEST['o']))
        {
            $r = "UPDATE reserva SET  paquete='4', hospedaje='4' WHERE nombre='".$_SESSION['nombre']."'";
           
	mysqli_query($con, $r)  
         
	or die("Problemas en el select".mysqli_error());

	mysqli_close($con);
	
	header('location:../controlviajeusuario.php');
        }
	?>


