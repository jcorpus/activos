<?php

function pass_lost_template($user,$pass_gato){

$mensaje = '
<body>



  <h2 class="titulo" style="font-size:24px;color:#006699;vertical-align:middle;">Olvidaste tu Contraseña <img src="../site_media/img/okas.png" style="width:30px" clas="todo_ok" alt="imagen OK" id="imagen_ok"/></h2>
  
  <p>Hola <span>'.$user.'</span></p>
  <p>Tu clave es: '.$pass_gato.' </p>

  <footer>
    <p>Equipo de Soporte</p>
  </footer>
</body>
';
  return $mensaje;

}


 ?>
