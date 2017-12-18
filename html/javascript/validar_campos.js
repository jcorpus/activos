/***LETRAS***/
function solo_letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " Ã¡Ã©Ã­Ã³ÃºabcdefghijklmnÃ±opqrstuvwxyzÃÃ‰ÃÃ“ÃšABCDEFGHIJKLMNÃ‘OPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 6]; //Es la validaciÃ³n del KeyCodes, que teclas recibe el campo de texto.

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