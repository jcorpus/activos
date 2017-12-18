//***NO COPIAR EN LOS INPUTS**/
function nocopy_input(){
    
    var nombre_alumno = document.getElementById('nombre_alumno');
    var ape_paterno = document.getElementById('ape_paterno');
    var ape_materno = document.getElementById('ape_materno');
    var dni_alumno = document.getElementById('dni_alumno');
    var telefono_alumno = document.getElementById('telefono_alumno');
    

    
    var inputs = document.getElementsByTagName("input");
    var textareas = document.getElementsByTagName("textarea");

    
    

     var nombre = document.getElementById('nombre_alumno');
     nombre.onpaste = function(e) {
       e.preventDefault();
        }
       var ape_paterno = document.getElementById('ape_paterno');
     ape_paterno.onpaste = function(e) {
       e.preventDefault();
        }
       var ape_materno = document.getElementById('ape_materno');
     ape_materno.onpaste = function(e) {
       e.preventDefault();
        }
       var dni = document.getElementById('dni_alumno');
     dni.onpaste = function(e) {
       e.preventDefault();
        }
       var telefono = document.getElementById('telefono_alumno');
     telefono.onpaste = function(e) {
       e.preventDefault();
        }
       var edad = document.getElementById('edad');
     edad.onpaste = function(e) {
       e.preventDefault();
        }

}






/***LETRAS***/
function solo_letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

/*******NUMEROS********/
function solo_numeros(e){
    var key = window.Event ? e.which : e.keyCode
    return ((key >= 48 && key <= 57))
 
}