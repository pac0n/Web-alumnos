<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="XJGV" content="">
    <link rel="stylesheet" href="styles6.css">
    <script src="js/script.js"></script>

    <title>Registro de usuarios</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
  </head>
  

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bar-teal">
        <!-- boton de apertura del sidebar -->
        <div id="mySidenav" class="sidenav">
          
        </div>
        <ul class="navbar-nav mr-auto">
        <li class="navbar-brand">Registro de usuarios</li>
        <li class="nav-item"><a class="nav-link" href="../index.php">Volver al inicio</a></li>
        </ul>
      </nav>
    </header>
      
    <body>
      <div class="container">
        <br><br><br>

    <h1>Bienvenido</h1>
    <br><br>

    <!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->

<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link" href="#estudiante" role="tab" data-toggle="tab">Alumno</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="estudiante">
  <br><br>
        <form action="alumno.php" role="form" method="post">
   
          <h1>Crear cuenta para alumno.</h1> 
            <br>
            <label for="full-names"><b>Matricula</b></label>
            <input type="text" placeholder="Ingresa tu matricula" name="matricula" onkeypress="return Cn(event)" required>

            <label for="full-names"><b>Nombre</b></label>
            <input type="text" placeholder="Ingresa tu nombre(s) completo(s)" name="nombre" onkeypress="return Cle(event)" required>

            <label for="full-names"><b>Apellido paterno</b></label>
            <input type="text" placeholder="Ingresa tu apellido paterno" name="apaterno" onkeypress="return Cle(event)" required>

            <label for="full-names"><b>Apellido materno</b></label>
            <input type="text" placeholder="Ingresa tu apellido materno" name="amaterno" onkeypress="return Cle(event)" required>

            <label for="email"><b>Correo electronico</b></label>
            <input type="email" placeholder="Ingresa tu e-mail" name="email" onkeypress="return Clnem(event)" required>

            <label for="password"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingresa una contraseña solamente con números y letras" name="psw" onkeypress="return Clnse(event)" required>

            <label for="password"><b>Repetir contraseña</b></label>
            <input type="password" placeholder="Repite tu contraseña" name="pass" onkeypress="return Clnse(event)" required>

            <input type="hidden" value="fotos" name="foto" required>
            <br><br>
            <button type="submit" class="login-button">Registrarse</button>

        </form>    
  </div>
         
    </body>  
      

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right teal"><a href="#">Arriba</a></p>
        <p>&copy; 2019 Francisco Garcés - FCC</p> <a href=""></a>
      </footer>
    </main>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
