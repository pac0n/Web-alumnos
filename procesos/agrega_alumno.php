<?php 
include '../login/conn.php';
$matricula = $_POST['matricula'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['correo_electronico'];
$mysqli->query("INSERT INTO usuarios (matricula,ap_paterno,ap_materno,nombre,password,correo_electronico,fotografia,rol) VALUES('".$matricula."','".$ap_paterno."','".$ap_materno."','".$nombre."','".$password."','".$email."','foto','estudiante')");
 ?> 