<!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
    
      
                            <form  action="procesos/login.php" method="post">
                                <h3 class="text-center">Inicia Sesion</h3>

          <div class="form-group" >
  <div class="col-md-6 col-md-offset-3">
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" autofocus ></input><span id="prueba1" style="color:red;"></span>
          </div>
      
            
          </div>
<br><br>
          <div class="form-group">
             <div class="col-md-6 col-md-offset-3">
            <input type="password" name="clave" class="form-control" id="password" placeholder="Password" ></input>
                                                <span id="prueba2" style="color:red;"></span>
          </div>
        </div>

          <br><br><hr>
                                <center>
          <div class="form-group">
            <input type="submit" class="btn btn-info" title="Iniciar sesion"  onclick="return validacion()" name="login" value="Entrar"></input>
          </div>
                                </center>
        </form>
            <center>
        <div class="form-group">
          <p>No estas registrado? <a href="#">Registrate ahora</a></p>
          <p><a href="#">Olvidaste tu password?</a></p>
        </div>
            </center>
  

    
    
    
        </div>
      
      </div>
      
    </div>
  </div>
  


   <!-- segundo modal-->
   
   
  <div class="modal fade" id="registro" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registro</h4>
        </div>
        <div class="modal-body">
   <?php
include ('dbcon.php');

$sq12= "SELECT * FROM tipo_usuarios";

$resultado2 = mysqli_query($con, $sq12);

$campocat ="";


?>
 
  <div class="container">
<div class="row">
<div class="col-sm-6">
        <form action="procesos/procesoregistro.php" method="post">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">Ingrese name(usuario)
    <input class="form-control" type="text" name="usuario" id="usuario">
    <span id="usuario1" style="color:red;"></span><br>
</div>
  
 <div class="col-md-6 col-md-offset-3">    Ingrese nombrecompleto 
    <input class="form-control" type="text" name="nombrecompleto" id="nombre">
    <span id="nombre1" style="color:red;"></span><br>
</div>
    <div class="col-md-6 col-md-offset-3">       Ingrese DNI
    <input class="form-control" type="text" name="dni" id="dni">
    <span id="dni1" style="color:red;"></span><br>
</div>
       <div class="col-md-6 col-md-offset-3">      Ingrese email
    <input class="form-control" type="email" name="email" id="email">
    <span id="email1" style="color:red;"></span><br>
</div>
         <div class="col-md-6 col-md-offset-3">   Ingrese telefono
  <input class="form-control" type="text" name="telefono" id="telefono">
  <span id="telefono1" style="color:red;"></span><br>
</div>
         <div class="col-md-6 col-md-offset-3">    Ingrese contraseña
    <input class="form-control" type="password" name="clave"><br>
  <span id="contra" style="color:red;"></span><br>
</div>
  <div class="col-md-6 col-md-offset-3">  
  <hr>
    <div align="center">
    <button type="submit" onclick="return validacion1()" class="btn btn-primary">Registrar </button>
  </div>
  </form>
        <div class="text-center">
       
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
       
        </div>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
  </div>

</div>

<script type="text/javascript">

  function validacion(){
 var valor = document.getElementById("usuario").value;
 var valor1 = document.getElementById("password").value;

if( valor == null || valor.length == 0 || /[^\w^@^\.^-]+/gi.test(valor)) {
  document.getElementById("prueba1").innerHTML = "El usuario no puede ir vacio o contiene caracteres extraños";
 return false;
}

if( valor1 == null || valor1.length == 0 || /^\s+$/.test(valor1)){
   document.getElementById("prueba2").innerHTML = "la contraseña no es valida o el campo se encuentra vacio";
  return false;
}

  }

function validacion1(){
 var email="!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/"
 var valor = document.getElementById("usuario").value;
 var valor1 = document.getElementById("nombre").value;
 var valor2 = document.getElementById("dni").value;
 var valor3 = document.getElementById("email").value;
 var valor4 = document.getElementById("telefono").value;
 var valor5 = document.getElementById("password").value;

if( valor == null || valor.length == 0 || /[^\w^@^\.^-]+/gi.test(valor)) {
  document.getElementById("usuario1").innerHTML = "El usuario no puede ir vacio o contiene caracteres extraños";

}

if( valor1 == null || valor1.length == 0 || /[^\w^@^\.^-]+/gi.test(valor1)) {
  document.getElementById("nombre1").innerHTML = "El nombre no puede ir vacio o contiene caracteres extraños";
 return false;
}

if( valor2 == null || valor2.length >= 9 || /[^\w^@^\.^-]+/gi.test(valor2) || valor2.length == 0 ) {
  document.getElementById("dni1").innerHTML = "El DNI no puede contener mas de 8 caracteres, tampoco ir vacio";
 return false;
}

if( valor3 == null || valor3.length == 0 || email.test(valor3)) {
  document.getElementById("email1").innerHTML = "El mail tiene que ser valido ademas de no debe ir vacio";
 return false;
}
if(valor3 == null || valor3.length == 0 || !(/^\d{9}$/.test(valor4)) ) {
   document.getElementById("telefono1").innerHTML = "El telefono debe contener las cifras correspondientes";
  return false;
}

if( valor5 == null || valor5.length <= 8 ) {
  document.getElementById("contra").innerHTML = "La contraseña no puede estar vacio contener menos de 8 caracteres";
 return false;
}
}

  function validacion3(){
 var valor = document.getElementById("nombre1233").value;


if( valor == null || valor.length == 0 || /[^\w^@^\.^-]+/gi.test(valor)) {
  document.getElementById("nombre123").innerHTML = "El nombre no puede ir vacio o contiene caracteres extraños";
 return false;
}


}
</script> 