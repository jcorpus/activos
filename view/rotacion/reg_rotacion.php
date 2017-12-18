
<section class="content-header cabecera">
      <h1>
       Registro de rotacion
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">rotacion</li>
      </ol>

</section>

    <!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            <!--  <h3 class="box-title">Datos del Producto</h3>-->
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="formulario_rotacion">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_rotacion">
                </div>
                <!--Mensaje de registro-->
                <div class="separador" style="border:1px solid #bebebe; padding:15px;" >
                <div class="form-group">
                  <!-- <label  class="col-sm-2 control-label">Fraccion</label> -->
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Activo</span>
                        <input value="" placeholder="fraccion" disabled="" required="required" maxlength="45" type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                  </div>
                  <!-- <label  class="col-sm-2 control-label">Presentacion</label> -->
                  <div class="col-sm-5">
                    <div class="input-group">
                        <span class="input-group-addon">Departamento</span>
                        <input value="" disabled="" type="text" class="form-control" id="departamento" name="npresentacion2">
                    </div>
                    <input  type="text" hidden="" id="id_activo" name="id_activo">
                  </div>
                  <button type="button" name="buscar" id="buscar" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_buscar_activo">Buscar <span class="glyphicon glyphicon-search"></span></button>
                </div>
                <div class="form-group">
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre rotacion</span>
                        <input type="text" name="nombre_rotacion" class="form-control validacion"  value="" id="nombre_rotacion" placeholder="rotacion" maxlength="50">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Destino</label>
                      <div class="col-sm-7">
                        <select name="destino_departamento" class="form-control" id="destino_departamento">
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    
                        <label  class="col-sm-1 control-label">Estado</label>
                      <div class="col-sm-2">
                        <select name="estado" class="form-control" id="estado">
                          <option value="A">Activo</option>
                          <option value="I">Inactivo</option>
                        </select>
                      </div>
                    
                  </div>
                <div class="box-footer text-center">
                  <button type="button" onclick="reg_rotacion()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Registrar</button>
                </div>

                </div>
              </div>
            </form>
          </div>
        </div>
         
    </div><!--row-->
</section>
    <!-- /.content -->

  <div class="modal fade " id="modal_buscar_activo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Buscar Activo</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <div class="box-body">
                              <div id="listar_activo" class="icon-loading">
                              </div>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
  </div>
</div>
<script src="html/javascript/rotacion.js"></script>