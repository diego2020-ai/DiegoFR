<?php 
include('dbcon.php');
session_start();
$id=$_GET['id'];
$registros=mysqli_query($con," SELECT * FROM reserva where id=$id") or die ("problemitas no parceros"); 

 ?>
<!DOCTYPE html>
<html>
<head>
<?php include('separados/cambiartickestilos.php') ?>
</head>
<body>
  <?php include('menues/navusuarioregistrado.php') ?>
    <div class="container">   
        <div class="login-container">      
            <div id="output"></div>       
            <div class="avatar"></div>         
            <div class="form-box">           
                <form action="procesos/cambiarfecha.php" method="request">
                <?php while ($reg=mysqli_fetch_array($registros)) {?>  
                     <input type="text" name="id" value="<?php echo $reg['id'];?>" hidden > 
                  
                    <input class="form-control" type="date" name="Fecha" value="<?php echo $reg['fecha_de_salida'];?>">    
                    <span id="spanfecha" style="color:red;"></span> 
                    <?php } ?>  
                    <br> 
                    <div align="right">    
                        <button class="btn btn-primary text-white" onclick="return validacionFecha()" type="submit">Cambiar</button>   
                    </div>
                </form>   
            </div>   
        </div>
    </div>
    <?php include('separados/footer.php'); ?>
    <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="vendor/chart.js/Chart.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
   <script src="js/sb-admin.min.js"></script>
   <script src="js/demo/datatables-demo.js"></script>
   <script src="js/demo/chart-area-demo.js"></script>
   <script type="text/javascript">
  function validacionFecha(){
var fecha1 = window.document.forms[0].Fecha.value
var diaActual = new Date();

var day = diaActual.getDate();
var month = diaActual.getMonth()+1;
var year = diaActual.getFullYear();

fecha  = year + '-' + 0+month + '-' + day;

if(fecha1<=fecha){
  
  document.getElementById("spanfecha").innerHTML = "La fecha es anterior a la actual";
  return false;
}
}
  </script>
</body>
</html>

        

