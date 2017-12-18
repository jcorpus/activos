/********************************************************/
$(document).ready(function(){
  listar_empleados();
});


function reg_marca(){
  if (true) {
  //var emaill = document.getElementById("get_pass_user").value;
  //var formusuario = new FormData($("#formulario_categoria")[0]);
  var descripcion = $("#descripcion").val();
  var estado = $("#estado").val();
  var accion = "registrar";
  var msj_cat;
  /// metodos de ajax aqui http://www.w3schools.com/jquery/ajax_ajaxsetup.asp
	$.ajax({
		url:'controller/cmarca.php',
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
    document.getElementById('msj_marca').innerHTML = msj_cat;
		},
    complete: function(){
      //alert("se completo el envio");
    },
		success: function(data){
    document.getElementById('msj_marca').innerHTML = data;
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
  document.getElementById('msj_marca').innerHTML = msj_cat;
}

}


/*******************************************/



/********************************************************/
function mod_marca(){
  if (true) {
  var descripcion2 = $("#descripcion2").val();
  var id_marca2 = $("#id_marca").val();
  console.log("el id es:"+id_marca2);
  var estado2 = $("input[name='estado2']:checked"). val();
  var accion = "modificar";
  var msj_cat;
  $.ajax({
    url:'controller/cmarca.php',
    type: 'POST',
    data: {
      id_marca2:id_marca2,
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
    document.getElementById('msj_mod_marca').innerHTML = msj_cat;

    },
    complete: function(){
      
      //alert("se completo el envio");
    },
    success: function(data){

    document.getElementById('msj_mod_marca').innerHTML = data;

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
    document.getElementById('msj_mod_marca').innerHTML = msj_cat;
  }
}


function mostrar_marca(datos){
  var valores=datos.split("*");
  $("#id_marca").val(valores[0]);
  $("#descripcion2").val(valores[1]);
  $("#estado2").val(valores[2]);
  console.log("el estado es: "+valores[2]);
  if (valores[2] == 'A') {
    document.getElementById('activo').checked = true;
  }else{
    document.getElementById('inactivo').checked = true;
  }
}


function listar_empleados(){
  var accion ="listar";
  $.ajax({
    url:'controller/cempleado.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
      $("#loading_marca").addClass("fa fa-refresh fa-spin fa-3x fa-fw");
    },
    complete: function(){
      $("#loading_marca").removeClass("fa fa-refresh fa-spin fa-3x fa-fw");
      $('#tabla_empleado').DataTable();
    },
    success: function(resp){
      if(resp.length>0){
      var datos = resp.split("*"); //separamos el json de el numero de filas que hay en la TABLA
      var valores = eval(datos[0]); //me trae solo los datos menos el numero de filas
      //alert("los valores son: "+valores.length); //son 5
      var cadena = "";
      cadena += "<table class='table table-bordered table-dataTables'  id='tabla_empleado'>";
      cadena += "<thead class=''>";
      cadena += "<tr>";
      cadena += "<th>#</th>";
      cadena += "<th>cedula</th>";
      cadena += "<th>Nombre</th>";
      cadena += "<th>apellido</th>";
      cadena += "<th>nacimiento</th>";
      cadena += "<th>dni</th>";
      cadena += "<th>direccion</th>";
      cadena += "<th>email</th>";
      cadena += "<th>estado</th>";
      cadena += "<th>Acción</th>";
      cadena += "</tr>";
      cadena += "</thead>";
      cadena += "<tbody>";

      for(var i = 0 ; i<valores.length; i++){
        datos_array =valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6]+"*"+valores[i][7]+"*"+valores[i][8];
        cadena += "<tr>";
        /*cadena += "<td>"+(i+1)+"</td>";*/
        cadena += "<td>"+valores[i][0]+"</td>";
        cadena += "<td>"+valores[i][1]+"</td>";
        cadena += "<td>"+valores[i][2]+"</td>";
        cadena += "<td>"+valores[i][3]+"</td>";
        cadena += "<td>"+valores[i][4]+"</td>";
        cadena += "<td>"+valores[i][5]+"</td>";
        cadena += "<td>"+valores[i][6]+"</td>";
        cadena += "<td>"+valores[i][7]+"</td>";
        cadena += "<td>"+valores[i][8]+"</td>";
        cadena += "<td><div class='btn-group'> <button type='button' class='btn btn-success ' data-toggle='modal' data-target='#myModal_modificar' onclick='mostrar_marca("+'"'+datos_array+'"'+");'  aria-expanded='false'>Editar <span class='glyphicon glyphicon-cog'></span></button></div></td>";
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