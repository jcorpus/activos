
<section class="content-header cabecera">
      <h1>
        Registro de empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

  </section>

    <!-- Main content -->
<section class="content">
  
    <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del empleado</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="formulario_usuario">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="resp_c" id="resp_user">
                </div>
                <!--Mensaje de registro-->
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nombres</label>
                  <div class="col-sm-4">
                    <input type="text" name="nombre_user" onkeypress="return solo_letras(event);" class="form-control validacion" value="bakuryo" id="nombre_user" placeholder="nombres" maxlength="40">
                  </div>
                  <label  class="col-sm-2 control-label">DNI</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control validacion" onkeypress="return solo_numeros(event);" name="dni_user" value="12345678" id="dni_user" maxlength="8" size="8" placeholder="DNI">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Ape Paterno</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control validacion" name="apep_user" value="corpus" onkeypress="return solo_letras(event);" id="apep_user" maxlength="40"  placeholder="apellido paterno">
                  </div>
                  <label  class="col-sm-2 control-label">Ape Materno</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control validacion" name="apem_user" value="mechato" onkeypress="return solo_letras(event);" id="apem_user" maxlength="40" placeholder="apellido materno">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Domicilio</label>

                  <div class="col-sm-4">
                    <textarea name="domicilio_user" placeholder="domicilio"  style="resize: vertical;"  class="form-control validacion" id="domicilio_user" maxlength="240" cols="3" rows="3">Saturno</textarea>
                  </div>
                  <label  class="col-sm-2 control-label">Teléfono</label>

                  <div class="col-sm-3">
                    <input type="text" name="telefono_user" onkeypress="return solo_numeros(event);" class="form-control validacion" value="767675" maxlength="20" id="telefono_user" placeholder="telefono">
                  </div>
                </div>
                <div class="form-group">
                <label  class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" name="email_user" class="form-control validacion"  value="doombakuryo@gmail.com" id="email_user" placeholder="email" maxlength="50">
                  </div>
                  <label  class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" name="password_user" class="form-control validacion" value="" id="password_user" placeholder="password" maxlength="50">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Sexo</label>

                  <div class="col-sm-4">
                    <label class="miradio ">
                      <input type="radio" id="masculino" class="form-control sexo validacion"  name="sexo_user" value="M"><!-- por defecto checked-->
                      <span> Masculino </span>
                    </label>
                    <label class="miradio ">
                      <input type="radio" id="femenino" class="form-control sexo validacion"  name="sexo_user" value="F">
                      <span>Femenino </span>
                    </label>
                  </div>
                  <label  class="col-sm-2 control-label">Imágen</label>
                  <div class="col-sm-4">
                    <input type="file" data-target="preview_image" class="file-input" id="imagen_user" accept="image/*"  name="imagen_user" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);" />
                      <div class="bootstrap-filestyle input-group" data-toggle="tooltip" data-placement="right" title="No obligatorio" ><span class="group-span-filestyle " tabindex="0"><label for="imagen_user" class="btn btn-primary "><span class="glyphicon glyphicon-folder-open "></span>&ensp;Escoger Imágen</label>
                      </span>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                <label  class="col-sm-2 control-label">Tipo de Rol</label>
                  <div class="col-sm-4">
                    <select class="form-control"id="tipousuario_datos" name="">
                      
                    </select>
                  </div>
                  <label  class="col-sm-2 control-label">Otracosa</label>
                  <div class="col-sm-4">
                    <input type="password" name="" class="form-control validacion" value="" id="" placeholder="password" maxlength="50">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="button" onclick="registrar_usuario()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp;   Registrar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
    </div><!--row-->

</section>
    <!-- /.content -->


<script src="html/javascript/reg_usuario.js"></script>
<script src="html/javascript/tipo_usuario.js"></script>

