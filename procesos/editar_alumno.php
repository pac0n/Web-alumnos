<?php 
include '../login/conn.php';
$id = $_POST['id'];
$matricula = $_POST['matricula'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['correo_electronico'];
$rol = $_POST['rol'];
$mysqli->query("UPDATE usuarios SET matricula='".$matricula."', ap_paterno='".$ap_paterno."', ap_materno='".$ap_materno."', nombre='".$nombre."', password='".$password."', correo_electronico='".$email."', fotografia='foto', rol='".$rol."' WHERE id=".$id);
 ?>