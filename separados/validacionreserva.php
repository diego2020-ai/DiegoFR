<script type="text/javascript">




	function validacionFecha(){
var validaciontickets = window.document.forms[0].cantidad_tickets.value
if(validaciontickets>20){
	 document.getElementById("mayora20").innerHTML = "El numero de tickets no puede exceder 20";
	 return false;
}
var fecha1 = window.document.forms[0].fecha_de_salida.value
var diaActual = new Date();

var day = diaActual.getDate();
var month = diaActual.getMonth()+1;
var year = diaActual.getFullYear();

fecha  = year + '-' + 0+month + '-' + day;

if(fecha1<=fecha){
	
  document.getElementById("spanfecha").innerHTML = "La fecha es anterior a la actual o esta vacía";
  return false;

}
var asiento1 = document.getElementById("tipo_de_asiento").value;
var linea1 = document.getElementById("linea").value;
var tickets1 = document.getElementById("cantidad_tickets").value;
if(linea1 == 1 && asiento1 == 1){
if(tickets1==1){
	precio="450$"
}
if(tickets1==2){
	precio="900$"
}if(tickets1==3){
	precio="1350$"
}if(tickets1==4){
	precio="1800$"
}if(tickets1==5){
	precio="2250$"
}if(tickets1==6){
	precio="2700$"
}if(tickets1==7){
	precio="3150$"
}
if(tickets1==8){
	precio="3550$"
}
if(tickets1==9){
	precio="3950$"
}
if(tickets1==10){
	precio="4300$"
}
if(tickets1==10){
	precio="4750$"
}
if(tickets1==11){
	precio="5200$"
}
if(tickets1==11){
	precio="5650$"
}
if(tickets1==12){
	precio="6100$"
}
if(tickets1==13){
	precio="6550$"
}
if(tickets1==14){
	precio="7000$"
}
if(tickets1==15){
	precio="7450$"
}
if(tickets1==16){
	precio="7900$"
}
if(tickets1==17){
	precio="7900$"
}
if(tickets1==18){
	precio="8350$"
}
if(tickets1==19){
	precio="8800$"
}
if(tickets1==20){
	precio="9250$"
}
}
if(linea1 == 1 && asiento1 == 2){
if(tickets1==1){
	precio="350$"
}
if(tickets1==2){
	precio="700$"
}if(tickets1==3){
	precio="1050$"
}if(tickets1==4){
	precio="1400$"
}if(tickets1==5){
	precio="1750$"
}if(tickets1==6){
	precio="2100$"
}if(tickets1==7){
	precio="2450$"
}
if(tickets1==8){
	precio="2800$"
}
if(tickets1==9){
	precio="3150$"
}
if(tickets1==10){
	precio="3500$"
}
if(tickets1==11){
	precio="3850$"
}
if(tickets1==12){
	precio="4200$"
}if(tickets1==13){
	precio="4550$"
}
if(tickets1==14){
	precio="4900$"
}
if(tickets1==15){
	precio="5250$"
}
if(tickets1==16){
	precio="5600$"
}
if(tickets1==17){
	precio="5950$"
}
if(tickets1==17){
	precio="6300$"
}
if(tickets1==18){
	precio="6650$"
}
if(tickets1==19){
	precio="7000$"
}
if(tickets1==20){
	precio="7350$"
}
}
if(linea1 == 2 && asiento1 == 1){
if(tickets1==1){
	precio="400$"
}
if(tickets1==2){
	precio="800$"
}if(tickets1==3){
	precio="1200$"
}if(tickets1==4){
	precio="1600$"
}if(tickets1==5){
	precio="2000$"
}if(tickets1==6){
	precio="2400$"
}if(tickets1==7){
	precio="2800$"
}
if(tickets1==8){
	precio="3200$"
}
if(tickets1==9){
	precio="3600$"
}
}if(linea1 == 2 && asiento1 == 2){
if(tickets1==1){
	precio="370$"
}
if(tickets1==2){
	precio="740$"
}if(tickets1==3){
	precio="1110$"
}if(tickets1==4){
	precio="1480$"
}if(tickets1==5){
	precio="1850$"
}if(tickets1==6){
	precio="2220$"
}if(tickets1==7){
	precio="2590$"
}
if(tickets1==8){
	precio="2960$"
}
if(tickets1==9){
	precio="3330$"
}
if(tickets1==10){
	precio="3700$"
}
if(tickets1==11){
	precio="4070$"
}
if(tickets1==12){
	precio="4440$"
}
if(tickets1==13){
	precio="4810$"
}
if(tickets1==14){
	precio="5180$"
}
if(tickets1==15){
	precio="5550$"
}
if(tickets1==16){
	precio="5920$"
}
if(tickets1==17){
	precio="6290$"
}
if(tickets1==18){
	precio="6660$"
}
if(tickets1==19){
	precio="7030$"
}
if(tickets1==20){
	precio="7400$"
}
}
if(linea1 == 3 && asiento1 == 1){
if(tickets1==1){
	precio="500$"
}
if(tickets1==2){
	precio="1000$"
}if(tickets1==3){
	precio="1500$"
}if(tickets1==4){
	precio="2000$"
}if(tickets1==5){
	precio="2500$"
}if(tickets1==6){
	precio="3000$"
}if(tickets1==7){
	precio="3500$"
}
if(tickets1==8){
	precio="4000$"
}
if(tickets1==9){
	precio="4500$"
}
if(tickets1==10){
	precio="5000$"
}
if(tickets1==11){
	precio="5500$"
}
if(tickets1==12){
	precio="6000$"
}
if(tickets1==13){
	precio="6500$"
}
if(tickets1==14){
	precio="7000$"
}
if(tickets1==15){
	precio="7500$"
}
if(tickets1==16){
	precio="8000$"
}
if(tickets1==17){
	precio="8500$"
}
if(tickets1==18){
	precio="9000$"
}
if(tickets1==19){
	precio="9500$"
}
if(tickets1==20){
	precio="10000$"
}
}if(linea1 == 3 && asiento1 == 2){
if(tickets1==1){
	precio="450$"
}
if(tickets1==2){
	precio="900$"
}if(tickets1==3){
	precio="1350$"
}if(tickets1==4){
	precio="1800$"
}if(tickets1==5){
	precio="2250$"
}if(tickets1==6){
	precio="2700$"
}if(tickets1==7){
	precio="3150$"
}
if(tickets1==8){
	precio="3550$"
}
if(tickets1==9){
	precio="3950$"
}
if(tickets1==10){
	precio="4300$"
}
if(tickets1==10){
	precio="4750$"
}
if(tickets1==11){
	precio="5200$"
}
if(tickets1==11){
	precio="5650$"
}
if(tickets1==12){
	precio="6100$"
}
if(tickets1==13){
	precio="6550$"
}
if(tickets1==14){
	precio="7000$"
}
if(tickets1==15){
	precio="7450$"
}
if(tickets1==16){
	precio="7900$"
}
if(tickets1==17){
	precio="7900$"
}
if(tickets1==18){
	precio="8350$"
}
if(tickets1==19){
	precio="8800$"
}
if(tickets1==20){
	precio="9250$"
}
}
var txt;
  if (confirm("El precio es de " + precio
  	+ " pesos ¿Desea proceder?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
    return false;
  }
  document.getElementById("demo").innerHTML = txt;




}



  </script>

						</script>
