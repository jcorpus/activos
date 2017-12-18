  <style>


body{

  font-family: "Source Sans Pro", Helvetica, sans-serif;
  background:#BEBEBE;
  color:#fff;
  font-weight:300;
}

h1{
  font-family: "Open Sans", arial;
  font-weight:300;
  float: left;
  width: 55%;
  margin-left: 5px;
  font-size: 40px;
  margin-bottom: 40px;
}
h2{
  margin:0px;
  font-family: "Open Sans", arial;
  font-weight:300;
}
.container{
  /* margin:50px; */
  width: 1251px;
  /* margin-top: -30px; */
  margin-left:10px;
  -webkit-transform:scale(0.9);
}
a.wide, a.box{
  text-decoration:none;
  color:#fff;
  -webkit-transition: -webkit-transform 0.1s;
  position:relative;
  overflow:hidden;
}

a.wide h2, a.box h2{
  position:absolute;
  bottom:5px;
  font-size:18px;
}

a.wide h2.top, a.box h2.top{
  position:static;

  font-size:14px;
}
a.wide i, a.box i{
font-size: 60px;
text-align: center;
display: block;
margin-top: 10px; /* outside Codepen is actually 30px */
}
a.wide:hover, a.box:hover{
  -webkit-transform: scale(1.05);
}

a.wide:active, a.box:active{
  -webkit-transform: scale(1);
}
.wide{
  width:200px;
  height:120px;
  overflow:hidden;
  font-size:13px;
  padding:10px;
  display:block;
  float:left;
  margin:10px;
}

.box{
  width:120px;
  height:120px;
  overflow:hidden;
  font-size:15px;
  padding:10px;
  display:block;
  float:left;
  margin:5px;
}
.lime{background:#61b812;}
.orange{background:#e76022;}
.blue{background:#1E90FF;}
.redgay{background:#DA312E;}
.yellow{background:#dbb701;}
.bluefish{background:#02b9e3;}
.magenta{background:#d22a4e;}
.spacer{
  width:1400px;
  margin-right: 50px;
  float:left;
  margin:0 auto;
 
}
.spacer3x{
  width:300px;
}




.right{
  float:right;
  text-align:right;
  margin-top: 30px;
}
.right p{
  margin: 5px 0px;
}
img.prof{
  float: right;
  margin: 10px;
  margin-top: 40px;
}
.i_bot{
  font-size: 30px;
  text-align: left;
  position: absolute;
  bottom: 0px;
}
.cal_i{
  margin-top: 20px;
  margin-left: 15px;
  width: 155px;
}
.cal_e h1{
  position: absolute;
  right: 0px;
  width: 115px;
  text-align: center;
  margin: 0px;
  font-size: 60px;
}
.cal_e p{
  position: absolute;
  right: 0px;
  width: 115px;
  text-align: center;
  margin-top: 75px;
  text-transform: uppercase;
}
.cal_e i{
  text-align: left;
  font-size: 25px !important;
  position: absolute;
  bottom: 0px;
}
  </style>
        <!-- Page Heading/Breadcrumbs -->
      
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

             <div class="container">
    <h1>Módulos</h1>
    
    <img src="#" width="50px" class="prof"/>  
    <div class="right">
      <h2> ROL: <?php echo $verificar_rol[6]; ?></h2>
      <p><?php echo $verificar_rol[4]; ?></p>
    </div>
    <div class='spacer'>
      <a href="Modulo_almacen/admin.php" class='wide blue'>

        <i class="fa fa-building" aria-hidden="true"></i>
        <h2>Almacen</h2>
      </a>
      <a href="javascript://" class='wide orange'>
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <h2>Compras</h2>
      </a>
      <a href="venta/index.php" class='wide lime'>
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <h2>Ventas</h2>
      </a>
      
      <a href="SistemaPlanilla/Vista/Plantilla/home.php" class='wide redgay'>
        <i class="fa fa-tasks" aria-hidden="true"></i>
        <h2>Planilla</h2>
      </a>
      
      <a href="Modulo_finanzas/production/index.php" class='wide yellow'>
        <i class="fa fa-usd" aria-hidden="true"></i>
        <h2>Finanzas</h2>
      </a>
    </div>
    

  </div>
               
          
            </div>



        </div>
        <!-- /.row -->
