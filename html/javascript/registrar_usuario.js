/*****************************************************/
function registrarr(e){
  if(e.keyCode == 13){
    //alert("presionaste el ENTER...");
    nuevousuario();
  }
}


/****************Validar campos vacios*************/
function validate () {
    var campos, valido, resp;

    // todos los campos .form-control en #campos
    campos = document.querySelectorAll('#registro input.validacion');

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



function nuevousuario(){

  var validacion = validate();
  console.log("la validacion es: "+validacion);
  if (validacion){
  //var frmusuario = new FormData($("#registro")[0]);
  
  var usuario = document.getElementById("usuario").value;
  var clave = document.getElementById("clave").value;
  var nombre = document.getElementById("nombre").value;
  var apepat = document.getElementById("apepat").value;
  var apemat = document.getElementById("apemat").value;
  var nacimiento = document.getElementById("nacimiento").value;
  var dni = document.getElementById("dni").value;
  var sexo = document.getElementById("sexo").value;
  var direccion = document.getElementById("direccion").value;
  var telefono = document.getElementById("telefono").value;
  var email = document.getElementById("email").value;
  
  var respuesta;
  /// metodos de ajax aqui http://www.w3schools.com/jquery/ajax_ajaxsetup.asp
  $.ajax({
    url:base_url+"cusuario/registrar_usuario",
    type: 'POST',
    dataType: '',
    data:{
      "usuario":usuario,
      "clave":clave,
      "nombre":nombre,
      "apepat":apepat,
      "apemat":apemat,
      "nacimiento":nacimiento,
      "dni":dni,
      "sexo":sexo,
      "direccion":direccion,
      "telefono":telefono,
      "email":email,
    },
    cache:false,  //si el navegador debe almacenar en cache la pagina solicitada
    //contentType: false, //"application / x-www-form-urlencoded"
    //processData: false, //
    beforeSend: function(){
    respuesta = '<div class="alert alert-dismissible alert-warning"> ';
    respuesta += '<button type="button" class="close" data-t="alert">&times;</button>';
    respuesta += ' <p> Enviando .....</p>'
    respuesta += '</div>';
    document.getElementById('ajax_registro').innerHTML = respuesta;

    },
    complete: function(){
      alert("se completo el envio");
    },
    success: function(resp,data, status, textStatus, xhr){
      console.log(resp);

      document.getElementById('ajax_registro').innerHTML = resp;
      /*
    console.log(resp);
    if (resp == 'correcto') {

      
      location.href = base_url+'csignup';
    }else{
      document.getElementById('ajax_registro').innerHTML = resp;
      console.log("error en los datos");

    }

    */
    //console.log("valor de la data:- " + data);
    //location.href = base_url+"categoria";
    //console.log("valor de testStatus:- " + JSON.stringify(textStatus));
    //console.log(xhr);
    //console.log("valor de status:- " + status);
  
    },
    error: function(XMLHttpRequest, textStatus, errorThrown, jqXHR){
      alert("SE PRODUJO UN ERROR, vuelve a recargar la pagina");
      //console.log(XMLHttpRequest);
      //console.log(textStatus);
      //console.log(errorThrown);
      //console.log(jqXHR);

    }

  });

}else{
  console.log("error faltan datos...");
    respuesta = '<div class="alert alert-dismissible alert-danger"> ';
    respuesta += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
    respuesta += ' <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp; Faltan Datos .....</p>'
    respuesta += '</div>';
    document.getElementById('ajax_registro').innerHTML = respuesta;
}

}






