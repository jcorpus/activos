
 $(document).ready(function(){
    listar_usuarios();
    //$(".oculto").hide();
  });

function listar_usuarios(){	
	var accion ="listar";
	$.ajax({
		url:'controller/clistar_usuarios.php',
		type: 'POST',
		data:'accion='+accion,
		beforeSend: function(){
			//<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
			//alert("enviando");
			$("#loading_marca").addClass("fa fa-refresh fa-spin fa-3x fa-fw");
			//$("#cargando").show();

		},
    complete: function(){
      $("#loading_marca").removeClass("fa fa-refresh fa-spin fa-3x fa-fw");
      $('#tabla_activo').DataTable();
    },
		success: function(resp){
			if(resp.length>0){
			var datos = resp.split("*"); //separamos el json de el numero de filas que hay en la TABLA
			var valores = eval(datos[0]); //me trae solo los datos menos el numero de filas
			//alert("los valores son: "+valores.length); //son 5
			var cadena = "";
			cadena += "<table class='table table-bordered table-dataTables'  id='tabla_activo'>";
			cadena += "<thead class=''>";
			cadena += "<tr>";
			cadena += "<th>#</th>";
			cadena += "<th>Usuario</th>";
			cadena += "<th>Estado</th>";
			cadena += "<th>Nombre</th>";
			cadena += "<th>Apellidos</th>";
			cadena += "<th>Email</th>";
			cadena += "<th>Acción</th>";
			cadena += "</tr>";
			cadena += "</thead>";
			cadena += "<tbody>";

			for(var i = 0 ; i<valores.length; i++){
				datos_array =valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6];
				cadena += "<tr>";
				/*cadena += "<td>"+(i+1)+"</td>";*/
				cadena += "<td>"+valores[i][0]+"</td>";
				cadena += "<td>"+valores[i][1]+"</td>";
				cadena += "<td>"+valores[i][2]+"</td>";
				cadena += "<td>"+valores[i][3]+"</td>";
				cadena += "<td>"+valores[i][4]+" - "+valores[i][5]+"</td>";
				cadena += "<td>"+valores[i][6]+"</td>";
				cadena += "<td><div class='btn-group'> <button type='button' class='btn btn-success ' data-toggle='dropdown' aria-expanded='false'>Acción <span class='glyphicon glyphicon-cog'></span></button> <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'> <span class='caret'></span></button> <ul class='dropdown-menu' role='menu'> <li><a href='#' data-toggle='modal' data-target='#myModal_modificar' onclick='mostrar_usuarios("+'"'+datos_array+'"'+");'>Estado</a></li> <li class='divider'></li></ul> </div></td>";
				cadena += "</tr>";

			}
			cadena += "</tbody>";
			cadena += "</table>";

			$("#listar").html(cadena);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
			alert("SE PRODUJO UN ERROR");
		}
	});



}




function mostrar_usuarios(datos){
	var valores=datos.split("*");
	//alert(d.length);
	$("#id_usuario").val(valores[0]);
	//$("#usu_nombre").val(valores[1]);
	$("#usu_estado").val(valores[2]);
	//$("#nombres").val(valores[3]);
	//$("#apellidop").val(valores[4]);
	//$("#apellidom").val(valores[5]);
	//$("#email").val(valores[6]);
	console.log("el estado es: "+valores[2]);
	if (valores[2] == 'A') {
		$("#estado").val('Activoo');
		document.getElementById('activo').checked = true;
		//document.getElementById('inactivo').checked = false;
	}else{
		$("#estado").val('Inactivoo');
		document.getElementById('inactivo').checked = true;
		//document.getElementById('activo').checked = false;
	}
}


function modificar_estado_user(){
	var id_usuario = $("#id_usuario").val();
	//var usu_estado = $("input[name=estado_user]").val();
	var usu_estado = $('input[name=estado_user]:checked').val();
	var accion ="modificar";
	$.ajax({
		url:'controller/clistar_usuarios.php',
		type: 'POST',
		data:{
			id_usuario:id_usuario,
      		usu_estado:usu_estado,
      		accion:accion
		},
		cache:false,  //si el navegador debe almacenar en cache la pagina solicitada
    	//contentType: false, //"application / x-www-form-urlencoded"
    	//processData: false,
		beforeSend: function(){
			msjpass = '<div class="alert alert-dismissible alert-warning"> ';
		    msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		    msjpass += ' <p> Enviando .....</p>'
		    msjpass += '</div>';
    		document.getElementById('resp_user').innerHTML = msjpass;
    		
		},
    complete: function(){
      

    },
		success: function(data){
    	
    	document.getElementById('resp_user').innerHTML = data;

		},
		error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
			alert("SE PRODUJO UN ERROR");
		}

	});
}