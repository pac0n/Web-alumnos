<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->

<?php 
 
 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Inicio</title>
	
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">


</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicio de sesión</p>   
        </div>
        <form  action="logueo.php" method="POST">
            <div class="input-field">
                <input  id="Matricula" name="Matricula" type="text" required class="validate" placeholder="Ingrese su matricula">
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp;</label>
            </div>
            <div class="input-field col s12">
                <input id="Password" name="Password" type="password" required class="validate" placeholder="Ingrese su contraseña">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp;</label>
            </div>
            <button class="waves-effect waves-teal btn-flat">Ingresar &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        <a href="home.php">Crear cuenta</a>
    </div>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>

</body>
</html>

<?php 
/*}

//si inicio seccion lo dirigimos a la pagina principal
else
{
  header('Location: ../index.php');
}*/
 ?>
