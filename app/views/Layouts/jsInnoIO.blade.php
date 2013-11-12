<script type="text/javascript">
var Controlador="";
var FormularioAgregar="";

$(function(){
	Controlador="Eventos";
	FormularioAgregar="#formAgregar";
	ActivarBotonEnviar();
});

var EsconderModalEvento = function(){
	$('#myModal').modal('hide');
}

function ActivarBotonEnviar(){
	$('#btnEnviar').on('click',function()
	{
	    Agregar();
	});
}

function Agregar(){
	var formulario = new FormData($(FormularioAgregar)[0]);
	$.ajax({
		type: 'POST',
		contentType:false,
	    processData: false,
	    cache: false,
		url: Controlador+'/Agregar',
		data : formulario,
		datatype: 'html',
		success: function(result)
		{
			alert('Agregado!');
			EsconderModalEvento();
		}
	});
}

</script>