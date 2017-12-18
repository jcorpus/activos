/********************************************************/
$(document).ready(function(){
  listar_modelos();
});

function reg_modelo(){
  if (true) {
  //var emaill = document.getElementById("get_pass_user").value;
  //var formusuario = new FormData($("#formulario_categoria")[0]);
  var descripcion = $("#descripcion").val();
  var estado = $("#estado").val();
  var accion = "registrar";
  var msj_cat;
  /// metodos de ajax aqui http://www.w3schools.com/jquery/ajax_ajaxsetup.asp
	$.ajax({
		url:'controller/cmodelo.php',
		type: 'POST',
    data: {
      descripcion:descripcion,
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
    document.getElementById('msj_modelo').innerHTML = msj_cat;
		},
    complete: function(){
      //alert("se completo el envio");
    },
		success: function(data){
    document.getElementById('msj_modelo').innerHTML = data;
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
    document.getElementById('msj_modelo').innerHTML = msj_cat;
  }
}

function mod_modelo(){
  if (true) {
  var descripcion2 = $("#descripcion2").val();
  var id_modelo2 = $("#id_modelo").val();
  console.log("el id es:"+id_modelo2);
  var estado2 = $("input[name='estado2']:checked"). val();
  var accion = "modificar";
  var msj_cat;
  $.ajax({
    url:'controller/cmodelo.php',
    type: 'POST',
    data: {
      id_modelo2:id_modelo2,
      descripcion2:descripcion2,
      estado2:estado2,
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
    document.getElementById('msj_mod_modelo').innerHTML = msj_cat;

    },
    complete: function(){
    },
    success: function(data){
    document.getElementById('msj_mod_modelo').innerHTML = data;

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
    document.getElementById('msj_mod_modelo').innerHTML = msj_cat;
  }
}


function mostrar_modelo(datos){
  var valores=datos.split("*");
  $("#id_modelo").val(valores[0]);
  $("#descripcion2").val(valores[1]);
  $("#estado2").val(valores[2]);
  console.log("el estado es: "+valores[2]);
  if (valores[2] == 'A') {
    document.getElementById('activo').checked = true;
  }else{
    document.getElementById('inactivo').checked = true;
  }
}


function listar_modelos(){
  var accion ="listar";
  $.ajax({
    url:'controller/cmodelo.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
      $("#loading_marca").addClass("fa fa-refresh fa-spin fa-3x fa-fw");
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
      cadena += "<th>Nombre</th>";
      cadena += "<th>Estado</th>";
      cadena += "<th>Acción</th>";
      cadena += "</tr>";
      cadena += "</thead>";
      cadena += "<tbody>";

      for(var i = 0 ; i<valores.length; i++){
        datos_array =valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2];
        cadena += "<tr>";
        /*cadena += "<td>"+(i+1)+"</td>";*/
        cadena += "<td>"+valores[i][0]+"</td>";
        cadena += "<td>"+valores[i][1]+"</td>";
        cadena += "<td>"+valores[i][2]+"</td>";
        cadena += "<td><div class='btn-group'> <button type='button' class='btn btn-success ' data-toggle='modal' data-target='#myModal_modificar' onclick='mostrar_modelo("+'"'+datos_array+'"'+");'  aria-expanded='false'>Editar <span class='glyphicon glyphicon-cog'></span></button></div></td>";
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