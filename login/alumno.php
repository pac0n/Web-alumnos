<?php  
//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
require('conn.php');
//resibir los datos y almacenar en variables
$matricula = $_POST['matricula'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$nombre = $_POST['nombre'];
$Contrasenia = $_POST['psw'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$Contrasenia2 = $_POST['pass'];
$verificar_duplicado = "SELECT * FROM usuarios WHERE matricula = '$matricula'";
$respuesta=$mysqli->query($verificar_duplicado);
$fila=$respuesta->fetch_assoc();
if($fila > 0)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('El alumno ya esta registrado, ingrese otros datos!')
                        window.history.go(-1);
                        </SCRIPT>");
                    //cerrar Conexión
                    mysqli_close($mysqli);
}
else
{

    $insertar = "INSERT INTO usuarios(id,matricula,ap_paterno,ap_materno,nombre,password,correo_electronico,fotografia,rol) VALUES (NULL,'$matricula','$apaterno','$amaterno','$nombre','$Contrasenia','$email','$foto','estudiante')";
    $mysqli->query($insertar);               
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Alumno registrado con exito!')
    window.location.href ='../index.php';
    </SCRIPT>");       
    //cerrar Conexión
    mysqli_close($conexion);
}