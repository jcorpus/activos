
function __(id){
  return document.getElementById(id);
}


function validar_email_usuario(){
    var email = $("#email_usuarior");
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email.val() == '' || !re.test(email.val()))
    {
      $("#email_usuarior").addClass('error_email');
      $("#email_usuarior").removeClass('email_valido');
      $(".mail_incorrecto").html("Email incorrecto");
      return false;
    }
     else{
       $("#email_usuarior").removeClass('error_email');
       $("#email_usuarior").addClass('email_valido');
       $(".mail_incorrecto").html("");
       return true;
     }
}

/****************Validar campos vacios*************/
function validate () {
    var campos, valido, resp;

    // todos los campos .form-control en #campos
    campos = document.querySelectorAll('#formulario_usuario input.validacion');

    valido = true; // es valido hasta demostrar lo contrario
    // recorremos todos los campos
    [].slice.call(campos).forEach(function(campo) {
        //console.log(campo.value.trim());

        if (campo.value.trim() === '') {
            valido = false;
        }
    });

    if (valido) {
      //alert("validoo");
      valido = true;
    } else {
      resp = '<div class="alert alert-warning alert-dismissible" id="">';
      resp += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
      resp += 'Faltan Datos &nbsp;<i class="icon fa fa-times"></i>';
      resp += '</div>';
      //__("msj_res_alumno").innerHTML = resp;
      valido = false;
      //document.getElementsByClassName("resp_c") = resp;
    }
    return valido;
}

/********************************************************/

function registrar_usuario(){

  //var validar_email =validar_email_alumno();
  //console.log("el email trae: "+validar_email);
  
  var respuesta = validate();

  console.log("respuesta "+respuesta);

  if (respuesta) {

  //var emaill = document.getElementById("get_pass_user").value;
  var formusuario = new FormData($("#formulario_usuario")[0]);

  var msjpass;
  /// metodos de ajax aqui http://www.w3schools.com/jquery/ajax_ajaxsetup.asp
	$.ajax({
		url:'Modulo_almacen/controller/controller_reg_usuario.php',
		type: 'POST',
    data: formusuario,
    cache:false,  //si el navegador debe almacenar en cache la pagina solicitada
    contentType: false, //"application / x-www-form-urlencoded"
    processData: false, //
		beforeSend: function(){
    msjpass = '<div class="alert alert-dismissible alert-warning"> ';
    msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    msjpass += ' <p> Enviando .....</p>'
    msjpass += '</div>';
    document.getElementById('msj_persona').innerHTML = msjpass;

		},
    complete: function(){
      //$("#loading_user").removeClass("fa fa-refresh fa-spin fa-3x fa-fw");
      //alert("se completo el envio");
    },
		success: function(data){

    document.getElementById('msj_persona').innerHTML = data;

    /*

			if(respuesta.length>0){
        msjpass = '<div class="alert alert-dismissible alert-success"> ';
        msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        msjpass += ' <p> Enviado Correctamente</p>'
        msjpass += '</div>';
        document.getElementById('msj_get_pass').innerHTML = msjpass;

			}else{


			}
      */

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
  document.getElementById('msj_persona').innerHTML = msjpass;
}

}




function buscar_persona(){
    var dni_persona = document.getElementById("dni_persona").value;
    //var usuario_nombre = document.getElementById("usuario_nombre").value;
    
    $.ajax({
    url:'Modulo_almacen/controller/controller_usuario.php',
    type: 'POST',
    data: 'dni_persona=' + dni_persona,
    beforeSend: function(){
    msjpass = '<div class="alert alert-dismissible alert-warning"> ';
    msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    msjpass += ' <p> Enviando .....</p>'
    msjpass += '</div>';
    document.getElementById('msj_persona').innerHTML = msjpass;

    },
    complete: function(){
      
    },
    success: function(resp){
    var respuesta = resp.includes('id_persona');
    if(respuesta == true){
      var msjpass2 = ' ';
       document.getElementById('msj_persona').innerHTML = msjpass2;

      var data = JSON.parse(resp);
      if(data.length > 0){

       for (var i = 0; i < data.length; i++) {
        $("#id_persona").val(data[i][0]);
        $("#nombre_persona").val(data[i][1]);
        $("#ape_persona").val(data[i][2]+' '+data[i][3]);
        $("#email_usuarior").val(data[i][5]);
      }

     }
    }else{

      msjpass = '<div class="alert alert-dismissible alert-danger"> ';
      msjpass += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      msjpass += ' <p> El dni no existe .....</p>'
      msjpass += '</div>';
      document.getElementById('msj_persona').innerHTML = msjpass;  
        
        //limpiando datos
        $("#dni_persona").val('');
        $("#id_persona").val('');
        $("#email_usuarior").val('');
        $("#nombre_persona").val('');
        $("#ape_persona").val('');
        $("#pass_user").val('');
        $("#pass2_user").val('');
    }

        



    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR, vuelve a recargar la pagina");


    }

  });


}


function limpiar_datos(){

  $("#dni_persona").val('');
  $("#id_persona").val('');
  $("#email_usuarior").val('');
  $("#nombre_persona").val('');
  $("#ape_persona").val('');

}
