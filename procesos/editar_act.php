<?php 
include '../login/conn.php';
$id = $_POST['id'];
$id_curso = $_POST['id_curso'];
$nombre_curso = $_POST['nombre_curso'];
$nombre_actividad = $_POST['nombre_actividad'];
$descripcion = $_POST['descripcion'];
$cevalua = $_POST['cevalua'];
$mysqli->query("UPDATE actividades SET id_curso='".$id_curso."', nombre_curso='".$nombre_curso."', nombre_actividad='".$nombre_actividad."', descripcion='".$descripcion."', cevalua='".$cevalua."' WHERE id=".$id);
 ?>