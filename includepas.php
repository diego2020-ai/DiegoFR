
<head>  
  <?php include('separados/funcionyestilosparaincludepas.php') ?>
</head>
<?php

include ('dbcon.php');
$sq21= "SELECT * FROM hospedaje";$resultado21 = mysqli_query($con, $sq21);
$sq22= "SELECT * FROM packs";$resultado22 = mysqli_query($con, $sq22);
?>
<body style="background-color:#f0f0f0">

<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="indexusuario.php" style="color:gray;">Agencia rodeo<em>.</em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li><a href="controlviajeusuario.php" style="color:gray;">Control de mis viajes</a></li>
            
            <li><a  href="logout.php" style="color:grey">Cerrar Sesión</a></li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
<br><br><br>
<br>

<div align="center">

<div class="form-sec">
  <h4>Paquetes</h4>
  
 <form action="procesos/paqueteproceso.php" method="post">
    <div class="form-group">
     <div class="row form-group">
    <div class="col-md-12">
    <label>Hospedaje</label>
    <select  id="hospedaje" name="hospedaje" class="form-control">
    <?php 
                 while ($row = mysqli_fetch_assoc($resultado21)) {
echo "<option value='$row[id]'</option>$row[nombre]\n";  
}
?>   
    </select>
    </div>
  </div>
    </div>
    <div class="form-group">
      <div class="row form-group">
          <div class="col-md-12">                           
              <label>Paquetes</label>                           
              <select  id="paquete" name="paquete" class="form-control">
   <?php 
while ($row1 = mysqli_fetch_assoc($resultado22)) {
echo "<option value='$row1[id]'</option>$row1[nombre]\n"; 
}
?>   
                    
             </select>                          
          </div>                      
        </div> 
    </div>
     <button type="submit" class="btn btn-default" name="l">Listo</button>
     <button type="submit" class="btn btn-default" name="o">omitir</button>
  </form>
  </div>
</div>

<br>
<!--

https://docs.google.com/uc?id=0B7UPM0QugWUjQVlzT0VpTmdYbG8 
https://docs.google.com/uc?id=id=0B7UPM0QugWUjM3hoVjU5VURYQlk
https://docs.google.com/uc?id=0B7UPM0QugWUjbkR2Um9YZ2pnNzQ
https://docs.google.com/uc?id=0B7UPM0QugWUjNVVVay1vYkRIV1E
https://docs.google.com/uc?id=0B7UPM0QugWUjOW1IZUhQWFhxN2c
https://docs.google.com/uc?id=0B7UPM0QugWUjR1p1VmRUNVpRZFU


-->
<?php include('separados/seccionincludepas.php');?>
<?php include('separados/footer.php') ?>