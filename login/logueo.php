<?php
if(session_status()!=PHP_SESSION_ACTIVE)
{
 @session_start();
}
require('conn.php');
$matricula= $_POST["matricula"];
$password= $_POST["password"];
if((!empty($matricula)) & (!empty($password)))
{
$consulta = mysqli_query($mysqli, "SELECT  * FROM usuarios WHERE matricula = '$matricula' AND password='$password'");
$cuenta=mysqli_num_rows($consulta);
            if($cuenta>0)
            {
                $_SESSION["matricula"]=$matricula;
                echo "<script> location.href='../alumnos.php'; </script>";
            }
            else
            {
              echo "<script>alert('Contraseña o Usuario es incorrecto.');location.href ='../index.php';</script>"; 
            }
}
?>
