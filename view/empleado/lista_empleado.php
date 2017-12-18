<section class="content-header cabecera">
      <h1>
        Lista de empleados
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
            <div class="form-group">
              <label class="col-sm-1 control-label">Reporte empleados</label>
              <div class="col-sm-8">
              <button type="button" class="btn btn-success" id="reporte_empleados"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i> Visualizar PDF</button>         
              </div>
              <br>
              <br>
            </div>

          <!-- /.box -->
          <div class="box-body">
              <div id="listar" class="icon-loading">
                <i id="loading" style="margin:auto;display:block; margin-top:60px;"></i>
              </div>
            </div>
          <!-- /.box -->
          </div>
        </div>

    </div><!--row-->

</section>
<!--MODAL MODIFICAR USUARIO-->
  <div class="modal fade " id="myModal_modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Modificar Usuario</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Datos del Usuario</h3>
        </div>
        <form class="form-horizontal" id="mod_user">
            <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="resp_user">
                </div>
                <!--Mensaje de registro-->
                <div class="alert alert-warning alert-dismissible" style="display:none" id="error">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fa fa-warning"></i>&nbsp;Faltan Datos...
                </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Estado</label>
                  <div class="col-sm-4">
                    <input type="hidden" id="id_usuario" name="id_usuario">
                    <label class="miradio "><!--checked-->
                    <input type="radio" id="activo" class="form-control sexo2"  name="estado_user" value="A" >
                    <span> Activo </span>
                    </label>
                    <label class="miradio ">
                    <input type="radio" id="inactivo" class="form-control sexo2"  name="estado_user" value="I">
                    <span>Inactivo </span>
                    </label>
                    <input style="display:none" type="text" name="fecha_registro" class="form-control" id="fecha_registro">
                  </div>
              </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="button" onclick="modificar_estado_user()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp;Modificar</button>
              </div>
              <p id="respuesta2"></p>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div><!--fin col-md8-->
    </div><!--row-->

</section>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <span class="glyphicon glyphicon-remove"></span></button>
      </div>
    </div>
  </div>
</div>
<!--MODAL MODIFICAR ALUMNO-->
    <!-- /.content -->
<script>
  $("#reporte_empleados").click(function(){
        window.open("view/reportes/reporte_empleados.php","blank");
      });
</script>
  <script src="html/javascript/empleado.js"></script>
