<?php
include('dbcon.php');
session_start();
$perpage = 6;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT 
r.id as id,
r.nombre as nombre, 
r.fecha_de_salida as fecha, 
l.nombre as linea, 
h.nombre as hora, 
t.nombre as asiento, 
r.cantidad_tickets as tickets, 
p.nombre as pack, 
z.nombre as hosp

FROM  reserva r, lineas l, hora_salida h, tipo_asiento t, packs p,  hospedaje z

WHERE
r.linea = l.id and r.hora_de_salida = h.id and r.tipo_de_asiento = t.id and r.paquete = p.id and r.hospedaje = z.id";//conssulta
$pageres = mysqli_query($con, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);//The ceil() function rounds a number UP to the nearest integer, if necessary.
$startpage = 1;//pagina de inicio
$nextpage = $curpage + 1;//proxima pagina
$previouspage = $curpage - 1;//pagina anterior

$ReadSql = "SELECT 
r.id as id,
r.nombre as nombre, 
r.fecha_de_salida as fecha,
r.estado_de_ticket as estado, 
l.nombre as linea, 
h.nombre as hora, 
t.nombre as asiento, 
r.cantidad_tickets as tickets, 
p.nombre as pack, 
z.nombre as hosp

FROM  reserva r, lineas l, hora_salida h, tipo_de_asiento t, packs p,  hospedaje z

WHERE
r.linea = l.id and r.hora_de_salida = h.id and r.tipo_de_asiento = t.id and r.paquete = p.id and r.hospedaje = z.id

 LIMIT $start, $perpage";

$res = mysqli_query($con, $ReadSql);//cantidad de registros



 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    a:hover{
    text-decoration:none;
}
.section-padding {
  padding: 60px 0;
}
.bottom {
    background-color: #212529;
}
.bottom .copyright {
    color: #e5e5e5;
    font-weight: 600;
}
.copyright a {
    color: #f2ff49;
    margin-left: 3px;
    padding-right: 3px;
}
.bottom p {
    margin-bottom: 0;
    line-height: 50px;
    font-size: 16px;
    font-weight: 400;
}
.copyright p span {
    color: #d1caca;
}
.bottom .copyright p, .bottom .copyright a:hover{
    color: #6c6d83;
}
  </style>
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
</head>

<body id="page-top">
 <?php 
 include('menues/navandsidebar.php');
 ?>
 <br><br>
 
    <div id="content-wrapper"> 
        <!-- Breadcrumbs--> 
        <div class="card mb-3"> 
            <div class="card-header">   
                <i class="fas fa-table"></i>  
                Viajes
            </div>  
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th>ID</th>               
                        <th>Cliente</th>                
                        <th>Fecha de salida</th>                                 
                        <th>Hora de salida</th>                  
                        <th>Tipo de asiento</th>                   
                        <th>cantidad de tickets</th>                    
                        <th>Linea</th>                   
                        <th>paquete</th>        
                        <th>Hospedaje</th>
                        <th>Estado</th>
                        <th>Editar</th>                   
                        <th>Eliminar</th>              
                    </thead>                  
                    <tbody>
<?php

   while ($r=mysqli_fetch_array($res)) {


       echo "<tr>";   
       echo "<td>".$r['id']."</td>";
       echo "<td>".$r['nombre']."</td>";
       echo "<td>".$r['fecha']."</td>";
       echo "<td>".$r['hora']."</td>";
       echo "<td>".$r['asiento']."</td>";
       echo "<td>".$r['tickets']."</td>";
       echo "<td>".$r['linea']."</td>";
       echo "<td>".$r['pack']."</td>";
       echo "<td>".$r['hosp']."</td>";
       echo "<td>".$r['estado']."</td>";


    ?>
                    <td><a href="procesos/modificarreserva.php?id=<?php echo $r['id']; ?>">Editar</a></td>  
                    <td><a value="confirm" id="confirm" onclick="return eliminar()" href="procesos/eliminarusuario.php?id=<?php echo $r['id']; ?>">Eliminar</a></td>
<?php
    echo "</tr>";
  }
  mysqli_close($con);
  ?>
                    </tr>
                    </tbody>
                    </table>
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
    </div><br><br><br>

<?php include('menues/footer.php') ?>


<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

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
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

function eliminar() {
var txt;
  if (confirm("Seguro que desea eliminar?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
    return false;
  }
  document.getElementById("demo").innerHTML = txt;

}
</script>
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
