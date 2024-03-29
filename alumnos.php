<?php
//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
require('login/conn.php');
if(session_status()!=PHP_SESSION_ACTIVE)
{
  @session_start();
}
if(!isset($_SESSION["matricula"]))
{
  header("location:index.php");  //sino inicio sesion lo dirigimos al login
}
  $matriculaLog=$_SESSION["matricula"];
  
  $qryUsuario = "SELECT matricula,nombre FROM usuarios where matricula='$matriculaLog'";
  $res2=$mysqli->query($qryUsuario);
  $fila2=$res2->fetch_assoc();
  $nombreu=$fila2["nombre"];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumnos</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="estilo.css" type="text/css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>I</b>Q</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="login/assets/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php
                echo' '.$nombreu;
                ?>
</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="login/assets/img/logo.png" class="img-circle" alt="User Image">
                <p>
                 ¡No olvides cerrar sesion!<br>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="login/cerrar.php" class="btn btn-default btn-flat">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="login/assets/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
<?php
    echo'<center>   <b><font color="#000000" face="georgia" size="4"><marquee width="200" scrollamount="6" bgcolor="#FFFFFF">Bienvenido '.$nombreu.'</marquee></font>';
?>
</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Todos los menus de cada pagina son independientes quiere decir que 
      el menu que cambies aqui hay que cambiarlo pagina por pagina -->
      <ul class="sidebar-menu">
       <ul class="sidebar-menu">
        <li class="header">Navegación principal</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Dar de alta</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/cursos.php"><i class="fa fa-circle-o"></i> Agregar cursos</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-check"></i> <span>Actividades</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="pages/actividades.php"><i class="fa fa-circle-o"></i> Mis actividades</a></li>
            </ul>
          </li>
        <li>
          <br><br>
          <a href="login/cerrar.php">Cerrar Sesion</a>
            <i class="fa fa-calendar"></i> <span></span>
            <span class="pull-right-container">    
            </span>
          </a>
        </li>    
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Panel de alumnos
        <small>Facultad de Ciencias de la Computacion</small>
      </h1>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <br><br>			
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3> </h3>
				  <p>Agregar cursos</p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-add-circle"></i>
				</div>
				<a href="pages/cursos.php" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
        </div>
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
        <div class="inner">
          <h3> </h3>
          <p>Mis actividades</p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-checkmark"></i>
        </div>
        <a href="pages/actividades.php" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
        </div>
			</div>
      </div>
       <div class="row">
        <!-- Left col -->
        <section id="page_calendar" class="col-md-12">
        </section>
      </div>
    </section>
	<script>  //se inserta la página del calendario
	    document.getElementById("page_calendar").innerHTML='<object type="text/html" data="page_calendar.php" height="650" width="100%" style="text-align:center;"></object>';
	</script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
