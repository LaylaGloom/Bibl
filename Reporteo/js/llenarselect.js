function agregarMeses(){
var anio = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
var mes = document.getElementById("Mes");
var reporte = document.getElementById("reportes");
 mes.innerHTML = '<option selected>Seleccione</option>';
if (reporte.value=="anual") {
    mes.innerHTML = '<option selected>Seleccione</option>';
   mes.disabled = true;
}else{
    mes.disabled = false;
}
if (reporte.value=="mensual") {
    var cont = 1;
    mes.innerHTML = '<option selected>Seleccione</option>';
    anio.forEach(function(element){
            var option = document.createElement("option");
        if (cont<=9) {
            option.value ="0"+cont;
        }else{
            option.value =cont;
        }
        option.text = element;
        mes.add(option);
        cont=cont+1;
    });   
}
if (reporte.value=="trimestral") {
var cont = 1;
    mes.innerHTML = '<option selected>Seleccione</option>';
    anio.forEach(function(element){
        
        if (cont<=10) {
            var option = document.createElement("option");
        if (cont<=9) {
            option.value ="0"+cont;
        }else{
            option.value =cont;
        }
        option.text = element;
        mes.add(option);
        }
        cont=cont+1;
    });   
}
if (reporte.value=="cuatrimestral") {
var cont = 1;
    mes.innerHTML = '<option selected>Seleccione</option>';
    anio.forEach(function(element){
        
        if (cont<=9) {
            var option = document.createElement("option");
        if (cont<=9) {
            option.value ="0"+cont;
        }else{
            option.value =cont;
        }
        option.text = element;
        mes.add(option);
        }
        cont=cont+1;
    });   
}
}
function cargarAnios(){
    var anioselect = document.getElementById("Anio");
     anioselect.innerHTML = '<option selected>Seleccione</option>';
      for (var i = 2018; i <= 2058; i++) {
        var option = document.createElement("option");
        option.value =i;
        option.text = i;
       anioselect.add(option);
      }
}