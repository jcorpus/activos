
<section class="content-header cabecera">
      <h1>
       Registro de modelo
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">modelo</li>
      </ol>
</section>
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
            <form class="form-horizontal" id="formulario_modelo">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_modelo">
                </div>
                <!--Mensaje de registro-->
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Descripcion.</label>
                      <div class="col-sm-2">
                        <input type="text" name="descripcion" id="descripcion" class="form-control">
                      </div>
                  <label  class="col-sm-1 control-label">Estado</label>
                  <div class="col-sm-2">
                    <select name="estado" id="estado" class="form-control">
                      <option value="A">Activo</option>
                      <option value="I">Inactivo</option>
                    </select>
                  </div>
                  <button type="button" onclick="reg_modelo()" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Registrar</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
         
    </div><!--row-->
    <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del modelo</h3>
            </div>

          <!-- /.box -->
          <div class="box-body">
              <div id="listar" class="">
              </div>
            </div>
          <!-- /.box -->
          </div>
        </div>

    </div><!--row-->

</section>
    <!-- /.content -->

<!--MODAL PRESENTACION-->
  <div class="modal fade " id="myModal_modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">modelo</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <form class="form-horizontal" id="mformulario_modelo">
                              <div class="box-body">
                                <!--Mensaje de registro-->
                                <div class="" id="msj_mod_modelo">
                                </div>
                                <!--Mensaje de registro-->
                                <div class="form-group">
                                 <label  class="col-sm-2 control-label">Descripcion.</label>
                                 <div class="col-sm-4">
                                        <input type="hidden" id="id_modelo" name="id_modelo">
                                        <input type="text" name="descripcion2" id="descripcion2" class="form-control">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Estado</label>
                                    <div class="col-sm-4">
                                      <label class="miradio "><!--checked-->
                                      <input type="radio" id="activo" class="form-control sexo2"  name="estado2" value="A" >
                                      <span> Activo </span>
                                      </label>
                                      <label class="miradio ">
                                      <input type="radio" id="inactivo" class="form-control sexo2"  name="estado2" value="I">
                                      <span>Inactivo </span>
                                      </label>
                                    </div>
                                </div>
                                <button type="button" onclick="mod_modelo()" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Modificar</button>
                              </div>
                            </form>
                            
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
<!--MODAL PRESENTACION -->

<script src="html/javascript/modelo.js"></script>