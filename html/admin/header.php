<!-- MENU CON CLASE FIXED-->
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel&ensp;</b>Admin</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#">
              <span class="hidden-xs">
                <i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;
                <input type="text" hidden="" value="<?php echo $usuarios[$_SESSION['app_id']]['nombre_user']; ?>" id="tipo_usuarioo">
                <?php echo $usuarios[$_SESSION['app_id']]['nombre_user']; ?>          
              </span>
            </a>

          </li>
          <li>
            <a href="http://localhost/pro_activo2/core/controller/salirController.php">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
            Salir &nbsp;
            </a>
          </li>

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        
          <img src="html/img_server/gatete.png"  class="img-circle" alt="User Image">
        
        </div>
        <div class="pull-left info">
          <p><?php echo $usuarios[$_SESSION['app_id']]['nombres']; echo " ".$usuarios[$_SESSION['app_id']]['usu_id']; ?><p/>
          
          <!-- Status -->
          <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> <?php echo $usuarios[$_SESSION['app_id']]['usu_nombre']; ?></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
        <div class="">
          Reloj
        </div>
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <input  hidden="" type="text" id="usuarioa_id" name="usuarioa_id" value=" <?php echo $usuarios[$_SESSION['app_id']]['usu_id']; ?> ">
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview" id="usuario_m">
          <a href="#"><i class="fa fa-male fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=list_usuarios"><i class="fa fa-list-ul" aria-hidden="true"></i>&ensp;Listar Usuarios</a></li>
          </ul>
        </li>
        <li class="treeview" id="activo_m">
          <a href="#"><i class="fa fa-truck fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Activo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_activo"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Registrar</a></li>
            <li><a href="?p=list_activo"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Listar</a></li>
          </ul>
        </li>
        <li class="treeview" id="marca_m">
          <a href="#"><i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Marca</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_marca"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Registrar</a></li>
            
          </ul>
        </li>
        <li class="treeview" id="modelo_m">
          <a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Modelo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_modelo"><i class="fa fa-sign-in" aria-hidden="true"></i>&ensp;Registrar</a></li>
          </ul>
        </li>
        <li class="treeview" id="rotacion_m">
          <a href="#"><i class="fa fa-external-link fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Rotación</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_rotacion"><i class="fa fa-sign-in" aria-hidden="true"></i>&ensp;Registrar</a></li>
            <li><a href="?p=list_rotacion"><i class="fa fa-external-link-square" aria-hidden="true"></i>&ensp;Listar</a></li>
          </ul>
        </li>
        <li class="treeview" id="empleado_m">
          <a href="#"><i class="fa fa-book fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Empleado</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_empleado"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Registrar</a></li>
            <li><a href="?p=list_empleado"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Listar</a></li>
          </ul>
        </li>
        <li class="treeview" id="departamento_m">
          <a href="#"><i class="fa fa-book fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Departamento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_departamento"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Registrar</a></li>
          </ul>
        </li>
        <li class="treeview" id="tipo_ingreso_m">
          <a href="#"><i class="fa fa-archive fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Tipo de ingreso</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_tipo_ingreso"><i class="fa fa-plus" aria-hidden="true"></i>&ensp;Registrar</a></li>
          </ul>
        </li>
        <li class="treeview" id="guia_control_m">
          <a href="#"><i class="fa fa-tags fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Guia de control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reg_guia"><i class="fa fa-list-ul" aria-hidden="true"></i>&ensp;Registrar</a></li>
            <li><a href="?p=list_guia"><i class="fa fa-list-ul" aria-hidden="true"></i>&ensp;Listar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database fa-lg" aria-hidden="true"></i>&ensp;&ensp; <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?p=reportes"><i class="fa fa-file-text-o" aria-hidden="true"></i>&ensp;Reportes PDF</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Gráficos</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Producto</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Almacen</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Ingreso</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Salidas</a></li>
            <li><a href="?p=graficos"><i class="fa fa-bar-chart" aria-hidden="true"></i>&ensp;Inventario</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Cuenta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
