<!DOCTYPE HTML>

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
               include 'menues/navusuario.php';          
           }
             ?>

	
<?php include('separados/headerindexsinregistro.php') ?>
	
	<?php include('separados/cards.php') ?>

    <?php include('separados/somosbuenos.php') ?>

	<?php include('separados/footer.php') ?>

    <?php include('separados/funcionesjs1.php') ?>

	</body>
<?php include('separados/modalvalidados.php') ?>

</html>

