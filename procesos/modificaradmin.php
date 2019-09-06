<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
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
<?php include('dbcon.php');
session_start();
$id=$_GET['id'];
    $registros=mysqli_query($con," SELECT * FROM usuario where id=$id") or die ("problemitas no parceros"); 
 include('navandsidebar.php');

 ?>
 
</body>
</html>
<div class="container">
    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
              <form action="proceso.php" method="request">
    <?php while ($reg=mysqli_fetch_array($registros)) {?>
    <input type="text" name="id" value="<?php echo $reg['id'];?>" hidden >

    <input class="form-control" type="text" name="usuario" value="<?php echo $reg['usuario'];?>">
    <br>
    <input class="form-control" type="text" name="nombrecompleto" value="<?php echo $reg['nombrecompleto'];?>">
        <br>
    <input class="form-control" type="text" name="dni" value="<?php echo $reg['dni'];?>">
    <br>
    <input class="form-control" type="text" name="email" value="<?php echo $reg['email'];?>">
 
    <br>
     <input class="form-control" type="text" name="telefono" value="<?php echo $reg['telefono'];?>">
    <br>
    <input class="form-control" type="text" name="clave" value="<?php echo $reg['clave'];?>">
    <br>
    <input class="form-control" type="text" name="tipo_usuario" value="<?php echo $reg['tipo_usuario'];?>">
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
