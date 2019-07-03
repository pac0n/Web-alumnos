<?php 
//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
if(session_status()!=PHP_SESSION_ACTIVE)
{
 @session_start();
}  
if(!isset($_SESSION["matricula"]))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inicio</title>
     <!-- Normalize CSS -->
  <link rel="stylesheet" href="login/css/normalize.css">
     <!-- Materialize CSS -->
  <link rel="stylesheet" href="login/css/materialize.min.css">
     <!-- Material Design Iconic Font CSS -->
  <link rel="stylesheet" href="login/css/material-design-iconic-font.min.css">
    <!-- Malihu jQuery custom content scroller CSS -->
  <link rel="stylesheet" href="login/css/jquery.mCustomScrollbar.css">
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="login/css/sweetalert.css">
    <!-- MaterialDark CSS -->
  <link rel="stylesheet" href="login/css/styles.css">
    <link rel="stylesheet" href="login/css/estilo2.css">
</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicio de sesión</p>   
        </div>
        <form  action="login/logueo.php" method="POST">
            <div class="input-field">
                <input  id="Matricula" name="matricula" type="text" required class="validate" placeholder="Ingrese su matricula">
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp;</label>
            </div>
            <div class="input-field col s12">
                <input id="Password" name="password" type="password" required class="validate" placeholder="Ingrese su contraseña">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp;</label>
            </div>
            <button class="waves-effect waves-teal btn-flat">Ingresar &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        <a href="login/home.php">Crear cuenta</a>
    </div>
    <!-- Sweet Alert JS -->
    <script src="login/js/sweetalert.min.js"></script>
    <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="login/js/jquery-2.2.0.min.js"><\/script>')</script>
    <!-- Materialize JS -->
  <script src="login/js/materialize.min.js"></script>
    <!-- Malihu jQuery custom content scroller JS -->
  <script src="login/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- MaterialDark JS -->
  <script src="login/js/main.js"></script>
</body>
</html>
<?php 
}
//si inicio seccion lo dirigimos a la pagina principal
else
{
  header('Location: alumnos.php');
}
?>
