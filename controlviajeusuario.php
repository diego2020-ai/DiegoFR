<!DOCTYPE HTML>

<html>
<style type="text/css">
body{font-family:lato,sans-serif}
.container{max-width:1000px;margin-left:auto;margin-right:auto;padding-left:10px;padding-right:10px}
h2{font-size:26px;margin:20px 0;text-align:center}
small{font-size:.5em}
li{border-radius:3px;padding:25px 30px;display:flex;justify-content:space-between;margin-bottom:25px}
.table-header{background-color:#95A5A6;font-size:14px;text-transform:uppercase;letter-spacing:.03em}
.table-row{background-color:#fff;box-shadow:0 0 9px 0 rgba(0,0,0,.1)}
.col-1{flex-basis:10%}
.col-2{flex-basis:40%}
.col-3,.col-4{flex-basis:25%}
@media all and (max-width:767px){
.table-header{display:none}
li{display:block}
.col{flex-basis:100%;display:flex;padding:10px 0}
.col:before{color:#6C7A89;padding-right:10px;content:attr(data-label);flex-basis:50%;text-align:right}
}
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agencia rodeo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
<?php
//Start session
include ('dbcon.php');
session_start();

$perpage = 3;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `reserva`";//conssulta
$pageres = mysqli_query($con, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);//The ceil() function rounds a number UP to the nearest integer, if necessary.
$startpage = 1;//pagina de inicio
$nextpage = $curpage + 1;//proxima pagina
$previouspage = $curpage - 1;//pagina anterior


$ReadSql = "SELECT  
        l.id as id,
        l.nombre as linea, 
        r.fecha_de_salida as fecha, 
        h.nombre as hora, 
        t.nombre as tipo, 
        r.cantidad_tickets as tickets, 
        r.nombre as nombre, 
        p.nombre as pack, 
        z.nombre as hosp, 
        e.nombre as estado 
        FROM reserva r, hora_salida h, hospedaje z, packs p, estado_de_ticket e, tipo_de_asiento t,  lineas l
        WHERE r.linea = l.id and r.hora_de_salida = h.id and r.tipo_de_asiento = t.id and r.paquete = p.id and r.hospedaje = z.id and r.estado_de_ticket = e.id and  r.nombre='".$_SESSION['nombre']."' LIMIT $start, $perpage";

$res = mysqli_query($con, $ReadSql);//cantidad de registros
		  ?>
	<div class="gtco-loader"></div>
	

	
	<!-- <div class="page-inner"> -->
	<?php include('menues/navusuarioregistrado.php') ?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(http://www.sanjuanintenso.com/images/iglesiarodeo1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">

				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">		
						<div class="container">
      <h2>Tus viajes </h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Nombre</div>
           <div class="col col-1">Linea</div>
          <div class="col col-1">Fecha de salida</div>
          <div class="col col-1">Hora de salida</div>
          <div class="col col-1">Tipo de asiento</div>
          <div class="col col-1">Cantidad de tickets</div>
          <div class="col col-1">Paquete</div>
          <div class="col col-1">Albergue</div>
          <div class="col col-1">Estado</div>
          <div class="col col-1"></div>
          
                
        </li>
      
       <?php

   while ($r=mysqli_fetch_array($res)) {
   echo "<li class='table-row'>";
         echo "<div class='col col-1' data-label='Nombre'>".$r['nombre']."</div>";
         echo "<div class='col col-1' data-label='Nombre'>".$r['linea']."</div>";
         echo "<div class='col col-1' data-label='Fecha de salida'>".$r['fecha']."</div>";
         echo "<div class='col col-1' data-label='Hora de salida'>".$r['hora']."</div>";
         echo "<div class='col col-1' data-label='Tipo de asiento'>".$r['tipo']."</div>";
         echo "<div class='col col-1' data-label='Cantidad de tickets'>".$r['tickets']."</div>";
         echo "<div class='col col-1' data-label='Paquete'>".$r['pack']."</div>";
         echo "<div class='col col-1' data-label='Hospedaje'>".$r['hosp']."</div>";
         echo "<div class='col col-1' data-label='Paquete'>".$r['estado']."</div>";
         ?>
         <div class='col col-1'><a href="cambiarticket.php?id=<?php echo $r['id']; ?>">Cambiar fecha</a></div>

                    
<?php

  }

  ?> 
      </ul>
    </div>
    
		</div>
	</div>
</div>

 <div align="center"> 
<a class="btn btn-default btn-sm" href="indexusuario.php">Volver a reserva</a>
  </div>
	

    <nav aria-label="Page navigation">
      <ul class="pagination">
        <?php if($curpage != $startpage){ ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Primero</span>
            </a>
          </li>
        <?php } ?>
        <?php if($curpage >= 4){ ?>
          <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
        <?php } ?>
        <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
        <?php if($curpage != $endpage){ ?>
          <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
          <li class="page-item">
            <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Last</span>
            </a>

       
          </li>
        <?php } ?>
      </ul>
    </nav>

</div>
		</div>
	</header>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

		

		</div>
	</footer>
	<!-- </div> -->

	</div>

<?php include('separados/funcionesjs1.php') ?>

	</body>



</html>

