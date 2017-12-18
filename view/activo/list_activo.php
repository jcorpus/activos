<section class="content-header cabecera">
      <h1>
        Lista de Activos.
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
              <h3 class="box-title">Datos del Activo</h3>
            </div>

          <!-- /.box -->
          <div class="form-group">
              <label class="col-sm-1 control-label">Reporte Activos</label>
              <div class="col-sm-8">
              <button type="button" class="btn btn-success" id="reporte_activos"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i> Visualizar PDF</button>         
              </div>
              <br>
              <br>
            </div>
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
<script>
  $("#reporte_activos").click(function(){
        window.open("view/reportes/reporte_activos.php","blank");
      });
</script>
<script src="html/javascript/activo.js"></script>
