$(document).ready(function() 
{ 
	var fechaactual = new Date();
	var mes = fechaactual.getMonth()+1;
	var dia = fechaactual.getDate();
	var year = fechaactual.getFullYear();
	switch(mes)
	{
		case 1:
		mes = '01';
		break;
		case 2:
		mes = '02';
		break;
		case 3:
		mes = '03';
		break;
		case 4:
		mes = '04';
		break;
		case 5:
		mes = '05';
		break;
		case 6:
		mes = '06';
		break;
		case 7:
		mes = '07';
		break;
		case 8:
		mes = '08';
		break;
		case 9:
		mes = '09';
		break;
	}
	switch(dia)
	{
		case 1:
		dia = '01';
		break;
		case 2:
		dia = '02';
		break;
		case 3:
		dia = '03';
		break;
		case 4:
		dia = '04';
		break;
		case 5:
		dia = '05';
		break;
		case 6:
		dia = '06';
		break;
		case 7:
		dia = '07';
		break;
		case 8:
		dia = '08';
		break;
		case 9:
		dia = '09';
		break;
	}
	document.getElementById("fecha").value = year + "/"+mes+"/"+dia;
	$( ".fecha" ).datepicker({
	  dateFormat: "yyyy/mm/dd",
	  monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
	  dayNamesMin: [ "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab" ]
	  });	
 
$(document).on('focusout', '#equipo-local-id',function (e) {
 		
 		var equipolocal;
 		equipolocal=$("#equipo-local-id option:selected").text();
 		//$('#equipolocal'.text(equipolocal));
 		//$("#equipolocal").val(equipolocal);
 		document.getElementById("equipolocal").value = equipolocal;
 		//alert($("#equipolocal").val();
 		
});

$(document).on('focusout', '#equipo-visitante-id',function (e) {
 		
 		var equipovisitante;
 		equipovisitante=$("#equipo-visitante-id option:selected").text();
 		//$('#equipolocal'.text(equipolocal));
 		$("#equipovisitante").val(equipovisitante);
 		document.getElementById("equipovisitante").value = equipovisitante;
});

}); 

/*var mostrarValor = function(x){
$('comida').text($('#elejir_comida:selected').text());*/
//id="equipo-local-id"
//equipolocal