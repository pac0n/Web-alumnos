<?php  
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
include 'cn.php';
//resibir los datos y almacenar en variables
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$email = $_POST['email'];
$facu = $_POST['facu'];
$Contrasenia = $_POST['psw'];
$Contrasenia2 = $_POST['pass'];
if($Contrasenia==$Contrasenia2)
{
$verificar_matricula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$matricula'");
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usuario = '$email'");
//consulta para insertar
$insertar = "INSERT INTO usuarios(id_usuario_sistema,id_usuario,nombre_usuario,paterno_usuario,materno_usuario,email_usuario,area_usuario,pass_usuario,Tipo_usuario,Pendiente) VALUES (NULL,'$matricula', '$nombre','$apaterno','$amaterno','$email','$facu','$Contrasenia',1,'Inhabilitado')";
//Ejecutar Consulta
if (mysqli_num_rows($verificar_matricula) > 0)
    {
            echo ("<SCRIPT LANGUAGE='JavaScript'>        
                     window.alert('Matricula o email repetido')
                      window.history.go(-1);
                     </SCRIPT>");
    }

    else if(mysqli_num_rows($verificar_correo) > 0)
    {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                     window.alert('El correo ya esta registrado')
                     window.history.go(-1);
                     </SCRIPT>");
                    
    }
    else
    {
                $resultado = mysqli_query($conexion, $insertar);
                if (!$resultado) 
                    {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                          window.alert('Petición fallo')

                             window.history.go(-1);
                    </SCRIPT>");
                }
                else
                {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                     window.alert('Petición realizada exitosamente')
                     window.location.href ='../index.php';
                     </SCRIPT>");
                }
                //cerrar Conexión
                mysqli_close($conexion);
    }
}
else
{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.history.go(-1);
                     window.alert('Las contraseñas no coinciden')
                     </SCRIPT>");
        mysqli_close($conexion);
}