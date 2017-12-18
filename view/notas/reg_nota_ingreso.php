
<section class="content-header cabecera">
      <h1>
        Nota de Ingreso
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">Nota de ingreso</li>
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
                <div class="" id="msj_res_notei">
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                  <button type="button" data-toggle='modal' data-target='#new_tp_notai' onclick="buscar_present2();" class="btn btn-block btn-primary btn-sm">Nuevo Tipo de Nota de ingreso&ensp;<i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                </div>
                </div>
                
                <!--Mensaje de registro-->
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Numero Notas de ingreso.</label>
                      <div class="col-sm-2">
                        <input type="text" onkeypress="return solo_numeros(event);" name="txtcategoria" id="txtcategoria" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">Fecha d Ingreso</label>
                  <div class="col-sm-4">
                   <input type="date" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Metodo de Ingreso.</label>
                      <div class="col-sm-2">
                        <input type="text" name="txtcategoria" id="txtcategoria" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">Tipo de Documento Ingreso</label>
                  <div class="col-sm-4">
                    <select name="marca" id="" class="form-control">
                      <option value="marca1">cat 1</option>
                      <option value="marca1">cat 2</option>
                      
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Orden de Compra.</label>
                      <div class="col-sm-2">
                        <input type="text" name="id_ordenc" id="id_ordenc" class="form-control">
                      </div>
                       <button type="button" style="float:left" name="buscar" id="buscar" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_ordencompra">Buscar Orden <span class="glyphicon glyphicon-search"></span></button>
                       <label  class="col-sm-2 control-label">Observacion.</label>
                      <div class="col-sm-2">
                        <input type="text" name="id_ordenc" id="id_ordenc" class="form-control">
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Tipo nota ingreso.</label>
                      <div class="col-sm-2">
                        <input type="text" id="id_tiponi">
                        <input type="text" name="id_ordenc" id="ntiponoi" class="form-control">
                      </div>
                      <button type="button" style="float:left" name="buscar" id="buscar" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_tipo_notai">Buscar Tipo <span class="glyphicon glyphicon-search"></span></button>
                      <label  class="col-sm-2 control-label">Estado.</label>
                      <div class="col-sm-2">
                        <select class="form-control">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Cantidad orden d compra</label>
                      <div class="col-sm-2">
                        <input disabled="" type="text" name="id_ordenc" id="ntiponoi" class="form-control">
                      </div>
                </div>

              </div>
            </form>

            <div class="box-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre produc</th>
                    <th>cantidad</th>
                    <th> id orden de compra</th>
                    <th>fecha de entrega</th>
                    <th>estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>0112</td>
                    <td>producto1</td>
                    <td>or343</td>
                    <td>3</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer text-center">
                <button type="button" onclick="reg_alumno()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp;   Registrar</button>
              </div>
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




<!--MODAL BUSCAR TIPONOTA INGRESO-->
  <div class="modal fade " id="modal_tipo_notai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Buscar Tipo de Nota de Ingreso</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Buscar</label>
                                <div class="col-sm-4">
                                  <input type="text" name="buscar_orden"  class="form-control" id="buscar_tiponotai" placeholder="buscar por nombre">
                                </div>
                                <div class="col-sm-3">
                                  <button type="button" onclick="buscar_tiponotai();" class="btn btn-block btn-primary btn-sm">Buscar&ensp;<i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <br>
                            <div class="box-body">
                              <div id="listar_tiponi" class="icon-loading">
                                <i id="loading_tiponi" style="margin:auto;display:block; margin-top:60px;"></i>
                                <div id="nodatos"></div>
                              </div>
                                <p id="paginador_tiponi" class="mi_paginador"></p>

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
<!--MODAL BUSCAR TIPO NOTA INGRESO -->


<!--MODAL REGISTRAR TIPONOTA INGRESO-->
  <div class="modal fade " id="new_tp_notai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nueva nota de ingreso</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <div class="box-body">
                            <form class="form-horizontal" id="frm_notaing">
                                <div class="box-body">
                                  <!--Mensaje de registro-->
                                  <div class="" id="msj_rnotaingre">
                                  </div>
                                  <!--Mensaje de registro-->
                                  <div class="form-group">
                                   <div class="col-sm-8">
                                    <div class="input-group">
                                      <span class="input-group-addon">Tipo Nota de Ingreso</span>
                                      <input value="" type="text" class="form-control" id="txttiponotaingreso" name="txttiponotaingreso">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-8">
                                    <div class="input-group">
                                    <span class="input-group-addon">Estado</span>
                                      <select name="estadonotaingreso" id="estadonotaingreso" class="form-control">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                      </select>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-8">
                                      <div class="box-footer text-center">
                                        <button type="button" onclick="reg_tpntingreso()" class="btn btn-success "><i class="fa fa-floppy-o" aria-hidden="true"></i>    Registrar</button>
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                              </form>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
                            </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
    </div>
  </div>
</div>
<!--MODAL REGISTRAR TIPO NOTA INGRESO -->





<script scr="html/javascript/validaciones.js"></script>
<script src="html/javascript/reg_nota_ingreso.js"></script>
<script src="html/javascript/list_ordedcompra.js"></script>
<script src="html/javascript/reg_tiponotai.js"></script>
<script src="html/javascript/list_tiponotai.js"></script>
