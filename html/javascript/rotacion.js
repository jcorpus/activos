/********************************************************/
$(document).ready(function(){
  listar_activo();
  listar_departamento();
  listar_rotacion();
});


function listar_departamento(){
  var accion ="cbo_departamento";
  $.ajax({
    url:'controller/crotacion.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    },
    complete: function(){
    },
    success: function(data){
      var datos = JSON.parse(data);
    console.log("datos del tipo de activo: "+datos);
    $.each(datos, function(i, item){
      $("#destino_departamento").append('<option value="'+item.id_depa+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}



function reg_rotacion(){
  if (true) {
  //var emaill = document.getElementById("get_pass_user").value;
  //var formusuario = new FormData($("#formulario_categoria")[0]);
  var id_activo = $("#id_activo").val();
  var nombre_rotacion = $("#nombre_rotacion").val();
  var destino_departamento = $("#destino_departamento").val();
  var estado = $("#estado").val();
  var accion = "registrar";
  var msj_cat;
  /// metodos de ajax aqui http://www.w3schools.com/jquery/ajax_ajaxsetup.asp
	$.ajax({
		url:'controller/crotacion.php',
		type: 'POST',
    data: {
      id_activo:id_activo,
      nombre_rotacion:nombre_rotacion,
      destino_departamento:destino_departamento,
      estado:estado,
      accion:accion
    },
    cache:false,  //si el navegador debe almacenar en cache la pagina solicitada
    //contentType: false, //"application / x-www-form-urlencoded"
    //processData: false, //
		beforeSend: function(){
    msj_cat = '<div class="alert alert-dismissible alert-warning"> ';
    msj_cat += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    msj_cat += ' <p> Enviando .....</p>'
    msj_cat += '</div>';
    document.getElementById('msj_rotacion').innerHTML = msj_cat;
		},
    complete: function(){
      //alert("se completo el envio");
    },
		success: function(data){
    document.getElementById('msj_rotacion').innerHTML = data;
		},
		error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
			alert("SE PRODUJO UN ERROR, vuelve a recargar la pagina");
		}

	});

}else{
  msjpass = '<div class="alert alert-dismissible alert-danger"> ';
  msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  msjpass += ' <i class="icon fa fa-times"></i>&nbsp; Faltan Datos'
  msjpass += '</div>';
  document.getElementById('msj_rotacion').innerHTML = msj_cat;
}

}






function listar_activo(){
  var accion ="buscar_activo";
  $.ajax({
    url:'controller/crotacion.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    
    },
    complete: function(){
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
      cadena += "<th>Select</th>";
      cadena += "<th>#</th>";
      cadena += "<th>Nombre</th>";
      cadena += "<th>id_depa</th>";
      cadena += "<th>departamento</th>";
      cadena += "</tr>";
      cadena += "</thead>";
      cadena += "<tbody>";

      for(var i = 0 ; i<valores.length; i++){
        datos_array =valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3];
        cadena += "<tr>";
        /*cadena += "<td>"+(i+1)+"</td>";*/
        cadena += "<td><button type='button'  onclick='seleccionar_activo("+'"'+datos_array+'"'+");' class='btn btn-success seleccionar btn-sm' ><i class='fa fa-check' aria-hidden='true'></i>&ensp;Select</button></td>";
        cadena += "<td>"+valores[i][0]+"</td>";
        cadena += "<td>"+valores[i][1]+"</td>";
        cadena += "<td>"+valores[i][2]+"</td>";
        cadena += "<td>"+valores[i][3]+"</td>";
        cadena += "</tr>";
      }
      cadena += "</tbody>";
      cadena += "</table>";

      $("#listar_activo").html(cadena);
      $(".seleccionar").click(function(){
          $('#modal_buscar_activo').modal('hide');
          });
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}

function listar_rotacion(){
  var accion ="listar_rotacion";
  $.ajax({
    url:'controller/crotacion.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    },
    complete: function(){
      $('#tabla_rotacion').DataTable();
    },
    success: function(resp){
      if(resp.length>0){
      var datos = resp.split("*"); //separamos el json de el numero de filas que hay en la TABLA
      var valores = eval(datos[0]); //me trae solo los datos menos el numero de filas
      //alert("los valores son: "+valores.length); //son 5
      var cadena = "";
      cadena += "<table class='table table-bordered table-dataTables'  id='tabla_rotacion'>";
      cadena += "<thead class=''>";
      cadena += "<tr>";
      cadena += "<th>#</th>";
      cadena += "<th>Nombre rotacion</th>";
      cadena += "<th>Estado</th>";
      cadena += "<th>activo name</th>";
      cadena += "<th>depa name</th>";
      cadena += "</tr>";
      cadena += "</thead>";
      cadena += "<tbody>";

      for(var i = 0 ; i<valores.length; i++){
        datos_array =valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3]+"*"+valores[i][4];
        cadena += "<tr>";
        /*cadena += "<td>"+(i+1)+"</td>";*/
        cadena += "<td>"+valores[i][0]+"</td>";
        cadena += "<td>"+valores[i][1]+"</td>";
        cadena += "<td>"+valores[i][2]+"</td>";
        cadena += "<td>"+valores[i][3]+"</td>";
        cadena += "<td>"+valores[i][4]+"</td>";
        cadena += "</tr>";
      }
      cadena += "</tbody>";
      cadena += "</table>";

      $("#listar_rotacion").html(cadena);
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}



function seleccionar_activo(datos){
  var valores=datos.split("*");
  $("#id_activo").val(valores[0]);
  $("#nombre").val(valores[1]);
  $("#departamento").val(valores[3]);
  $("#origen").val(valores[3]);
  
}