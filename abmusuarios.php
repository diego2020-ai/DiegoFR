<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('dbcon.php');
session_start();


$perpage = 8;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `usuario`";//conssulta
$pageres = mysqli_query($con, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);//The ceil() function rounds a number UP to the nearest integer, if necessary.
$startpage = 1;//pagina de inicio
$nextpage = $curpage + 1;//proxima pagina
$previouspage = $curpage - 1;//pagina anterior

$ReadSql = "SELECT 
u.id as id,
u.usuario as usu,
u.nombrecompleto as nom,
u.dni as dni,
u.email as email,
u.telefono as tel,
t.nombre as tipo,
u.clave as clave

FROM usuario u, tipo_usuarios t

WHERE u.tipo_usuario = t.id  LIMIT $start, $perpage";

$res = mysqli_query($con, $ReadSql);//cantidad de registros
 ?> 
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
    Usuario</div>
    <div class="card-body">
    
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                           
                   <th>ID</th>
                   <th>Usuario</th>
                    <th>Nombre completo</th>
                     <th>DNI</th>
                     <th>Email</th>
                     <th>Telefono</th>
                      <th>Clave</th>
                      <th>Tipo_usuario</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                
                   </thead>
                   <tbody>

<?php

   while ($r=mysqli_fetch_array($res)) {

echo "<tr>";
      
        echo "<td>".$r['id']."</td>";
    echo "<td>".$r['usu']."</td>";
    echo "<td>".$r['nom']."</td>";
    echo "<td>".$r['dni']."</td>";
        echo "<td>".$r['email']."</td>";
         echo "<td>".$r['tel']."</td>";
        echo "<td>".$r['clave']."</td>";
          echo "<td>".$r['tipo']."</td>";


    ?>

  <td> 
    <a href="procesos/modificarusuario.php?id=<?php echo $r['id']; ?>">Editar</a></td>
 <td><a value="confirm" id="confirm" onclick="return eliminar()" href="procesos/eliminarusuario.php?id=<?php echo $r['id']; ?>">Eliminar</a></td>
    



<?php
    echo "</tr>";
  }
  mysqli_close($con);
  ?></tbody>
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

</div>
</div>
<!-- /.container-fluid -->


</div>
<!-- /.content-wrapper -->
<?php include('menues/footer.php') ?>
</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
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
      <div class="modal-body">¿Estás seguro de querer salir?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="logout.php">Si, salir</a>
      </div>
    </div>
  </div>
</div>

<!-- eliminar usuario-->
<div class="modal fade" id="eliminarrr" tabindex="-1" role="dialog" aria-labelledby="eliminarrrr" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarrrr">Eliminar usuario</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">¿Estás seguro de querer salir?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>

<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
