<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
<?php include('separados/head.php') ?>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
 <?php      
           if (empty($_SESSION['tipo']))
           {
               include 'navusuario.php';          
           }if ($_SESSION['tipo'] == '1')
           {
             include 'navusuario.php';
            }
            else{  include 'menues/navusuarioregistrado.php'; }

             ?>
             
	<?php include('separados/headerindexconregistro.php') ?>

	<?php include('separados/cards.php') ?>

    <?php include('separados/somosbuenos.php') ?>

	<?php include('separados/footer.php') ?>

    <?php include('separados/funcionesjs1.php') ?>

	</body>
<?php include('separados/funcionjsvalidadoparareserva.php') ?>


</html>

