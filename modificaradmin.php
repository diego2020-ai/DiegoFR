<!DOCTYPE html>
<html>
<head>
<?php include('separados/modificaradminstilos.php'); ?>
</head>
<body>
<?php include('dbcon.php');
session_start();
$id=$_GET['id'];
    $registros=mysqli_query($con," SELECT * FROM usuario where id=$id") or die ("problemitas no parceros"); 
 include('menues/navandsidebar.php');

 ?>
 
</body>
</html>
<div class="container">
    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
              <form action="procesos/proceso.php" method="request">
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
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">¿Estás seguro de querer salir?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="procesos/logout.php">Si, salir de mi cuenta</a>
      </div>
    </div>
  </div>
</div>

