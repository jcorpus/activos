/********************************************************/
$(document).ready(function(){
  listar_cbo_marcas();
  listar_cbo_tipoactivo();
  listar_guia();
  listar_tipoingreso();
  listar_activos();
  listar_cbo_departamento();
});



function listar_activos(){
  var accion ="listar";
  $.ajax({
    url:'controller/cactivo.php',
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
      cadena += "<th>Descrip</th>";
      cadena += "<th>Cant</th>";
      cadena += "<th>precio u</th>";
      cadena += "<th>fecha</th>";
      cadena += "<th>estado</th>";
      cadena += "<th>años</th>";
      cadena += "<th>porcentaje</th>";
      cadena += "<th>residuo</th>";
      cadena += "<th>modelo</th>";
      cadena += "<th>tipo activo</th>";
      cadena += "<th>guia</th>";
      cadena += "<th>tipo ingreso</th>";
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
        cadena += "<td>"+valores[i][3]+"</td>";
        cadena += "<td>"+valores[i][4]+"</td>";
        cadena += "<td>"+valores[i][5]+"</td>";
        cadena += "<td>"+valores[i][6]+"</td>";
        cadena += "<td>"+valores[i][7]+"</td>";
        cadena += "<td>"+valores[i][8]+"</td>";
        cadena += "<td>"+valores[i][9]+"</td>";
        cadena += "<td>"+valores[i][10]+"</td>";
        cadena += "<td>"+valores[i][11]+"</td>";
        cadena += "<td>"+valores[i][12]+"</td>";
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



function reg_activo(){
  if (true) {
  //var formusuario = new FormData($("#formulario_categoria")[0]);
  var descripcion = $("#descripcion").val();
  var cantidad = $("#cantidad").val();
  var costo = $("#costo").val();
  var estado = $("#estado").val();
  var cbo_marca = $("#cbo_marca").val();
  var cbo_modelo = $("#cbo_modelo").val();
  var tipo_activo = $("#tipo_activo").val();
  var guia_control = $("#guia_control").val();
  var tipo_ingreso = $("#tipo_ingreso").val();
  var depreciacion = $("#depreciacion").val();
  var years = $("#years").val();
  var Porcentaje = $("#Porcentaje").val();
  var residuo = $("#residuo").val();
  var departamento = $("#departamento").val();
  var accion = "registrar";

  var msj_cat;
	$.ajax({
		url:'controller/cactivo.php',
		type: 'POST',
    data: {
      descripcion:descripcion,
      cantidad:cantidad,
      costo:costo,
      estado:estado,
      cbo_marca:cbo_marca,
      tipo_activo:tipo_activo,
      guia_control:guia_control,
      tipo_ingreso:tipo_ingreso,
      depreciacion:depreciacion,
      years:years,
      Porcentaje:Porcentaje,
      residuo:residuo,
      departamento:departamento,
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
    document.getElementById('msj_activo').innerHTML = msj_cat;
		},
    complete: function(){
      //alert("se completo el envio");
    },
		success: function(data){
    document.getElementById('msj_activo').innerHTML = data;
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
  document.getElementById('msj_activo').innerHTML = msj_cat;
}

}



function listar_cbo_tipoactivo(){
  var accion ="cbo_tipoactivo";
  $.ajax({
    url:'controller/cactivo.php',
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
      $("#tipo_activo").append('<option value="'+item.id_tip_act+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}

function listar_cbo_departamento(){
  var accion ="cbo_departamento";
  $.ajax({
    url:'controller/cactivo.php',
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
      $("#departamento").append('<option value="'+item.id_depa+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}

function listar_guia(){
  var accion ="cbo_guia";
  $.ajax({
    url:'controller/cactivo.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    },
    complete: function(){
    },
    success: function(data){
      var datos = JSON.parse(data);
    console.log("datos del tipo la guia: "+datos);
    $.each(datos, function(i, item){
      $("#guia_control").append('<option value="'+item.id_gia_con_int+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}


function listar_tipoingreso(){
  var accion ="cbo_tipoingreso";
  $.ajax({
    url:'controller/cactivo.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    },
    complete: function(){
    },
    success: function(data){
      var datos = JSON.parse(data);
    console.log("datos del tipo la guia: "+datos);
    $.each(datos, function(i, item){
      $("#tipo_ingreso").append('<option value="'+item.id_tip_ing+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}


function listar_cbo_marcas(){
  var accion ="cbo_marca";
  $.ajax({
    url:'controller/cactivo.php',
    type: 'POST',
    data:'accion='+accion,
    beforeSend: function(){
    },
    complete: function(){
    },
    success: function(data){
      var datos = JSON.parse(data);
    console.log(datos);
    $.each(datos, function(i, item){
      $("#cbo_marca").append('<option value="'+item.id_mar+'">'+item.descripcion+'</option>');
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR");
    }
  });
}

$("#cbo_marca").change(function(){
  $("#cbo_marca option:selected").each(function(){
    var id_marca = $("#cbo_marca").val();
    //alert(id_marca);
    $('#cbo_modelo')[0].options.length = 0;///limpio el select
    consultar_modelos(id_marca);
  });
});


function consultar_modelos(id_marca){
  var accion ="cbo_modelo";
  $.ajax({
    url:"controller/cactivo.php",
    type: 'POST',
    dataType: '',
    data:{
      "id_marca":id_marca,
      accion:accion
    },
    cache:false,  //si el navegador debe almacenar en cache la pagina solicitada
    success: function(resp,data, status, textStatus, xhr){
      var datos = JSON.parse(resp);
      var contador = datos.length;
      console.log("el contador es: "+datos.length);
      if(contador === 0){
         console.log("no hay datos...");
 
      }else{
         console.log(datos);
          $.each(datos, function(i, item){
          $("#cbo_modelo").append('<option value="'+item.id_mod+'">'+item.descripcion+'</option>');
      });
      }
       

    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR, vuelve a recargar la pagina");
      //console.log(XMLHttpRequest);
      //console.log(textStatus);
      //console.log(errorThrown);
      //console.log(jqXHR);
    
      }
  });

}

