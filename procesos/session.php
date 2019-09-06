<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not

if ($_SESSION['tipo'] == 'administrador') {
	header("location:../administrador.php");

}
else{
	header("location:../indexusuario.php");
}


$session_id=$_SESSION['id'];

?>