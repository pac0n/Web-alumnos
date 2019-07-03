<?php  
require('../login/conn.php');
$contra = $_POST["contra"];
$matricula = $_POST["matricula"];
$verificar_token = "SELECT * FROM cursos WHERE token = '$contra'";
$verificar_matricula_c = "SELECT * FROM curso_alumno WHERE matricula = '$matricula'";
$respuesta=$mysqli->query($verificar_token);
$fila=$respuesta->fetch_assoc();
$id_curso=$fila["id"];
$nombre_curso=$fila["nombre"];
$verificar_duplicado = "SELECT * FROM curso_alumno WHERE id_curso = '$id_curso' AND matricula='$matricula'";
$respuesta2=$mysqli->query($verificar_duplicado);
$fila2=$respuesta2->fetch_assoc();
if($fila > 0)
{	
		if($fila2 > 0)
		{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
         			 	window.alert('El alumno ya esta registrado, ingrese otro token!')
       				 	window.history.go(-1);
       				 	</SCRIPT>");
					//cerrar Conexión
					mysqli_close($mysqli);
		}
		else
		{
			$insertar = "INSERT INTO curso_alumno(id,matricula,nombre_curso,id_curso) VALUES(NULL,'$matricula','$nombre_curso', '$id_curso')";
			$mysqli->query($insertar);	
				echo ("<SCRIPT LANGUAGE='JavaScript'>
         			 	window.alert('Agregaste curso con exito!')
         			 	window.location.href ='../index.php';
       				 	</SCRIPT>");
					//cerrar Conexión
					mysqli_close($mysqli);
		}
}
else
{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
      
         			window.alert('El token es incorrecto!!')
       				window.history.go(-1);
       				</SCRIPT>");
		mysqli_close($mysqli);
}