
<section class="content-header cabecera">
      <h1>
        Nota de Salida
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">Nota de salida</li>
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
            <form class="form-horizontal" id="formulario_producto">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_res_notes">
                </div>
                <!--Mensaje de registro-->
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Descripcion.</label>
                      <div class="col-sm-2">
                        <input type="text" name="txtcategoria" id="txtcategoria" class="form-control">
                      </div>
                  <label  class="col-sm-1 control-label">Estado</label>
                  <div class="col-sm-2">
                    <select name="marca" id="" class="form-control">
                      <option value="1">Activo</option>
                      <option value="0">Inactivo</option>
                    </select>
                  </div>
                  <button type="button" onclick="reg_alumno()" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp;   Registrar</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
         
    </div><!--row-->

</section>
    <!-- /.content -->





<!--MODAL PRESENTACION-->
  <div class="modal fade " id="modal_ordencompra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Buscar Orden de Compra</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Buscar</label>
                                <div class="col-sm-4">
                                  <input type="text" name="buscar_orden"  class="form-control" id="buscar_orden" placeholder="buscar por nombre">
                                </div>
                                <div class="col-sm-3">
                                  <button type="button" data-toggle='modal' data-target='#modal' onclick="buscar_present2();" class="btn btn-block btn-primary btn-sm">Buscar&ensp;<i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <br>
                            <div class="box-body">
                              <div id="listar" class="icon-loading">
                                <i id="loading_orden" style="margin:auto;display:block; margin-top:60px;"></i>
                                <div id="nodatos"></div>
                              </div>
                                <p id="paginador_orden" class="mi_paginador"></p>

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
<!--MODAL PRESENTACION -->


<script src="html/javascript/reg_nota_ingreso.js"></script>
<script src="html/javascript/list_ordedcompra.js"></script>

<?php 

/*
session_name('misesion');
session_register('contador');
echo '<a href="'.$PHP_SELF.'?'.SID.'">Contador vale: '.++$_SESSION['contador'].'</a><br>';
echo 'Ahora el nombre es '.session_name().' y la sesión '.$misesion.'<br>';

*/


 ?>
