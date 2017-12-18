
<section class="content-header cabecera">
      <h1>
       Registro de Activo
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registro</a></li>
        <li class="active">Activo</li>
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
            <form class="form-horizontal" id="formulario_marca">
              <div class="box-body">
                <!--Mensaje de registro-->
                <div class="" id="msj_activo">
                </div>
                <!--Mensaje de registro-->
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Descripcion.</label>
                      <div class="col-sm-2">
                        <input type="text" value="activo1" onkeypress="return solo_letras(event);" maxlength="20" name="descripcion" id="descripcion" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">cantidad.</label>
                      <div class="col-sm-2">
                        <input type="text" name="cantidad" maxlength="7" onkeypress="return solo_numeros(event);" value="4" id="cantidad" class="form-control">
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Costo uni.</label>
                      <div class="col-sm-2">
                        <input type="text" value="30000" maxlength="10" onkeypress="return solo_numeros(event);" name="costo" id="costo" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">Estado</label>
                  <div class="col-sm-2">
                    <select name="estado" id="estado" class="form-control">
                      <option value="A">Activo</option>
                      <option value="I">Inactivo</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Marca.</label>
                      <div class="col-sm-2">
                        <select name="cbo_marca" class="form-control" id="cbo_marca">
                        </select>
                      </div>
                  <label  class="col-sm-2 control-label">Modelo.</label>
                      <div class="col-sm-2">
                        <select name="cbo_modelo" class="form-control" id="cbo_modelo">
                        </select>
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Tipo de activo.</label>
                      <div class="col-sm-2">
                        <select name="tipo_activo" class="form-control" id="tipo_activo">
                        </select>
                      </div>
                  <label  class="col-sm-2 control-label">Guia de control.</label>
                      <div class="col-sm-2">
                        <select name="guia_control" class="form-control" id="guia_control">
                        </select>
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Tipo de Ingreso.</label>
                      <div class="col-sm-2">
                        <select name="tipo_ingreso" class="form-control" id="tipo_ingreso">
                        </select>
                      </div>
                  <label  class="col-sm-2 control-label">Depreciacion</label>
                  <div class="col-sm-2">
                    <input type="text" onkeypress="return solo_numeros(event);" disabled="" name="depreciacion" id="depreciacion" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                 <label  class="col-sm-2 control-label">Años.</label>
                      <div class="col-sm-2">
                        <input type="text" value="5" onkeypress="return solo_numeros(event);" maxlength="2" name="years" id="years" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">Porcentaje.</label>
                      <div class="col-sm-2">
                        <input type="text" name="Porcentaje" onkeypress="return solo_numeros(event);" maxlength="3"  id="Porcentaje" class="form-control">
                      </div>
                </div>
                <div class="form-group">
                 <label  class="col-sm-2 control-label">Valor Residual</label>
                      <div class="col-sm-2">
                        <input type="text" value="0" onkeypress="return solo_numeros(event);" maxlength="9" name="residuo" id="residuo" class="form-control">
                      </div>
                  <label  class="col-sm-2 control-label">Departamento.</label>
                  <div class="col-sm-2">
                        <select name="departamento" class="form-control" id="departamento">
                        </select>
                  </div>
                </div>
                <div class="box-footer text-center">
                  <button type="button" onclick="reg_activo()" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Registrar</button>
                  <button type="button" onclick="calcular_activo()" class="btn btn-danger "><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Calcular</button>
                </div>
              </div>
            </form>
            <div class="separador" style="border:1px solid #bebebe; padding:15px;" >
                <br>
                <table class='table table-bordered table-hover table-striped' id="tabla_presentacionn">
                  <thead>
                  <tr class='success'>
                    <th>Años</th>
                    <th>Cuota de depreciacion</th>
                    <th>Depreciacion acumulada</th>
                    <th>Valor libro</th>
                  </tr>
                  </thead>
                  <tbody class="tablapen" id="presentacion_deta">  
                  </tbody>
                </table>
                <p>Total del libro es: <strong id="total_libro" style="font-size: 19px"></strong></p>
            </div>
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
          <h4 class="modal-title">Buscar Orden de Compra</h4>
        </div>
          <!--AQUI DATOS DEL MODAL-->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <form class="form-horizontal" id="mformulario_marca">
                              <div class="box-body">
                                <!--Mensaje de registro-->
                                <div class="" id="msj_mod_marca">
                                </div>
                                <!--Mensaje de registro-->
                                <div class="form-group">
                                 <label  class="col-sm-2 control-label">Descripcion.</label>
                                 <div class="col-sm-4">
                                        <input type="hidden" id="id_marca" name="id_marca">
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
                                <button type="button" onclick="mod_marca()" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Modificar</button>
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

<script>
  function calcular_activo(){
    $(".tablapen tr").remove();
    var costo = $("#costo").val();
    var residuo = $("#residuo").val();
    var years = $("#years").val();
    var id = 5, depreciacion;
    costo = parseInt(costo);
    residuo = parseInt(residuo);
    years = parseInt(years); 
    var depreciacion = (costo - residuo) / years;
    $("#depreciacion").val(depreciacion);
    var cuota, vlibro, total_vlibro = 0; 
    var depre_acumulada = depreciacion;
    for(var i = 1; i <= years; i++){
      console.log("el año "+"#"+i+" vale "+depreciacion);
          depre_acumulada = depreciacion * i;
          console.log("acumulada "+depre_acumulada);
          vlibro = costo - depre_acumulada;
          total_vlibro +=vlibro;
          console.log("valor del libro :"+vlibro);
          
      $(".tablapen").append('<tr><td>'+i+'</td><td>'+depreciacion+'</td><td>'+depre_acumulada+'</td><td>'+vlibro+'</tr>');      
    }
      $("#total_libro").html(total_vlibro);
      //document.getElementById('msj_mod_marca').innerHTML = msj_cat;
      
  }



</script>

<script src="html/javascript/validar_campos.js"></script>
<script src="html/javascript/activo.js"></script>


        