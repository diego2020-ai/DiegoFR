<script type="text/javascript">

	function validacion3(){
 var valor = document.getElementById("nombre1233").value;


if( valor == null || valor.length == 0 || /[^\w^@^\.^-]+/gi.test(valor)) {
  document.getElementById("nombre123").innerHTML = "El nombre no puede ir vacio o contiene caracteres extraños";
 return false;
}


}
</script>	