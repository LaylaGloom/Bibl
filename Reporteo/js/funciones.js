
//Bloquear
function preguntarBloquear(id,status){
	if (new String(status).valueOf() != new String("Bloqueado").valueOf())
		alertify.confirm('Bloquear Cliente', '¿Seguro que desea bloquear este cliente?',
						function(){ bloquearCliente(id) }
	                , function(){ alertify.error('Se cancelo')});
	else
		alertify.alert('Bloquear Cliente', 'El cliente ya se encuentra bloqueado ;)');
}

function bloquearCliente(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/bloquearCliente.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Bloqueado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

//Desbloquear
function preguntarDesbloquear(id,status){
	if (new String(status).valueOf() != new String("Activo").valueOf())
		alertify.confirm('Desbloquear Cliente', '¿Seguro que desea desbloquear a este cliente?',
						function(){ desbloquearCliente(id) }
	                , function(){ alertify.error('Se cancelo')});
	else
		alertify.alert('Desbloquear Cliente', 'El cliente ya se encuentra desbloqueado ;)');
}

function desbloquearCliente(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/desbloquearCliente.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Desbloqueado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
