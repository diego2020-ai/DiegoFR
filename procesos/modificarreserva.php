<?php 
include('dbcon.php');


$id=$_GET['id'];
$registros=mysqli_query($con," SELECT * FROM reserva where id=$id") or die ("problemitas no parceros"); 

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <title>Modificar administrador</title>
    <style type="text/css">
       
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

    </style>
</head>
<body>
    <div class="container">   
        <div class="login-container">      
            <div id="output"></div>       
            <div class="avatar"></div>         
            <div class="form-box">           
                <form action="procesoreservaadmin.php" method="request">
                <?php while ($reg=mysqli_fetch_array($registros)) {?>  
                     <input type="text" name="id" value="<?php echo $reg['id'];?>" hidden > 
                    <input class="form-control" type="text" name="Cliente" value="<?php echo $reg['nombre'];?>">  
                    <br>
                    <input class="form-control" type="text" name="Fecha" value="<?php echo $reg['fecha_de_salida'];?>">    
                    <br> 
                    <input class="form-control" type="text" name="Hora" value="<?php echo $reg['hora_de_salida'];?>">  
                    <br>
                    <input class="form-control" type="text" name="Tipo" value="<?php echo $reg['tipo_de_asiento'];?>">
                    <br>  
                    <br>  
                    <input class="form-control" type="text" name="tickets" value="<?php echo $reg['cantidad_tickets'];?>">  
                    <br>  
                    <input class="form-control" type="text" name="paquete" value="<?php echo $reg['paquete'];?>">  
                    <br>  
                    <input class="form-control" type="text" name="hospedaje" value="<?php echo $reg['hospedaje'];?>">  
                    <br>
                    <input class="form-control" type="text" name="estado" value="<?php echo $reg['estado_de_ticket'];?>">  
                    <br>
                     <input class="form-control" type="text" name="linea" value="<?php echo $reg['linea'];?>">  
                    <br>
                    <?php } ?>  
                    <br> 
                    <div align="right">    
                        <button class="btn btn-primary text-white" type="submit">Confirmar</button>   
                    </div>
                </form>   
            </div>   
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="vendor/chart.js/Chart.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
   <script src="js/sb-admin.min.js"></script>
   <script src="js/demo/datatables-demo.js"></script>
   <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>

        

