$(document).ready(function(){
	var usuario_panel = $("#tipo_usuarioo").val();

	switch(usuario_panel){

		case "administrador":
		console.log("acceso a todo");
		$("#activo_m").hide();
		$("#marca_m").hide();
		$("#modelo_m").hide();
		$("#rotacion_m").hide();
		$("#tipo_ingreso_m").hide();
		$("#guia_control_m").hide();
		$("#empleados_a").hide();
		$("#empleados_a").hide();


		break;

		case "empleado":
		$("#empleado_m").hide();
		$("#usuario_m").hide();
		break;

		case "Otro":
		break;


	}



});