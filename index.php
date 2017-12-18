<?php require('core/models/model_conexion.php');

if (isset($_SESSION['app_id'])) { //esta definida app_id
  echo '<script> window.location="plantilla.php"; </script>';
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Activo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="site_media/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="site_media/font-awesome-4.6.3/css/font-awesome.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="site_media/css/AdminLTE.css">
  <!--style log in-->
  <link rel="stylesheet" href="site_media/css/estilo_login.css">
  <!-- mi script-->
  <!-- jQuery 2.2.3 -->
  <script src="site_media/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="html/javascript/v_login.js"></script>
  <script src="html/javascript/recuperar_pass.js"></script>
  <script src="html/javascript/reg_usuario.js"></script>
</head>
<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>USP</b> Activo</a>
    </div>
            <div class="alerta" id="ajax_login" ></div>
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="site_media/img/avatar.png" />
                <p id="profile-name" class="profile-name-card"></p>

                <form class="form-signin" onkeypress="return runLogin(event);">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="user_email"  name="user_email" class="form-control" placeholder="Usuario" maxlength="100" >
                    <input type="password"  id="user_password" name="user_password" class="form-control" placeholder="Password" >
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" id="sesion_login" value="remember-me"> Recordarme
                        </label>
                    </div>
                    <button type="button"class="btn btn-lg btn-primary btn-block btn-signin" onclick="go_login();">Ingresar</button>
                </form><!-- /form -->
                <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm" class="forgot-password">
                    Olvidaste tu clave?
                </a>
            </div><!-- /card-container -->

  </div>
  <div class="">
    <p class="text-center">
      <?php printf(YEAR_APLICACION);  ?>
    </p>

  </div>

  <!-- modal olvido <password password-->
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h4>
        </div>
        <div class="modal-body">
          <div class="" id="msj_get_pass">

          </div>
          <div onkeypress="return run_rec_password(event);">
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Tu email:</label>
              <input type="email" class="form-control" id="get_pass_user">
            </div>
          </div>
          <div class="form-group">
            <p>
              La contraseña se enviará a tu Correo Electrónico
            </p>
          </div>
          <div class="form-group">
              <div class="col-sm-5">
              <img src="captcha2.php" id="valor" alt="">
              <a href="javascript:void(0)" onclick="document.getElementById('valor').src='captcha2.php'" ><img src="site_media/img/refresh.png" alt=""></a>
              </div>
              <div class="col-sm-3">
                <input type="text" style="border-color: #bebebe;border-radius: 4px;" class="form-control" id="valor_captcha" maxlength="5" name="valor_captcha">
              </div>
          </div>
          <br>
      </div>
      <br>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" onclick="rec_password();" class="btn btn-primary">Enviarme un correo</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- modal registrar usuario nuevo -->
<div class="modal fade modal_registro" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="mimodal_registrar">Formulario de Registro</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="formulario_usuario">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_persona">
                </div>
                
                <!--Mensaje de registro-->
                <div class="form-group">
                  	<div class="col-sm-4" style="padding-left:90px;">
	                  <select name="" class="form-control" id="">
	                  	<option value="">DNI</option>
	                  	<option value="">RUC</option>
	                  </select>
                  	</div>
                  <div class="col-sm-4">
                  	
                    <input type="text" name="dni_persona" class="form-control validacion" value="47596416" id="dni_persona" placeholder="DNI" maxlength="8">
                  </div>
                  <button type="button" style="cursor:pointer;" onclick="buscar_persona();" class="btn btn-primary">Buscar &nbsp;&nbsp; <i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Nombre</label>
                  <div class="col-sm-5">
                    <input hidden="" class="validacion" type="text" name="id_persona" id="id_persona">
                    <input hidden="" class="validacion" type="text" name="email_usuarior" id="email_usuarior">
                    <input type="text" name="nombre_persona" onkeypress="return solo_letras(event);" class="form-control validacion" value="" disabled="" id="nombre_persona" placeholder="nombre" maxlength="40">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Apellidos</label>
                  <div class="col-sm-5">
                    <input type="text" name="ape_persona" onkeypress="return solo_letras(event);" class="form-control validacion" value="" disabled="" id="ape_persona" placeholder="Apellidos" maxlength="40">
                  </div>
                  
                </div>
			
 

                <div class="form-group">
                  <label class="col-sm-4 control-label">Contraseña</label>
                  <div class="col-sm-5">
                    <input type="password" name="pass_user" onkeypress="return solo_letras(event);" class="form-control validacion" value="" id="pass_user" placeholder="contraseña" maxlength="40">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Repetir Contraseña</label>
                  <div class="col-sm-5">
                    <input type="password"  name="pass2_user" onkeypress="return solo_letras(event);" class="form-control validacion" value="" id="pass2_user" placeholder="repetir contraseña" maxlength="40">
                  </div>
                  
                </div>
                
 

              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="button" style="cursor:pointer;" onclick="registrar_usuario();" class="btn btn-success">Registrar &nbsp;&nbsp; <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> </button>
              </div>
              <!-- /.box-footer -->
            </form>
          
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>
  </div>


<!-- Bootstrap 3.3.6 -->
<script src="site_media/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
 ?>
