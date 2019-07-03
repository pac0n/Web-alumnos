<?php 
include '../login/conn.php';
$id = $_POST['id_curso'];
$nombre_curso = $_POST['nombre'];
$nombre_actividad = $_POST['nombre_actividad'];
$descripcion = $_POST['descripcion'];
$cevalua = $_POST['cevalua'];
$mysqli->query("INSERT INTO actividades (id_curso,nombre_curso,nombre_actividad,descripcion,cevalua) VALUES ('".$id."','".$nombre_curso."','".$nombre_actividad."','".$descripcion."','".$cevalua."')");
 ?>