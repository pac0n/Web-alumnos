<?php 
include '../login/conn.php';
$token = $_POST['token'];
$nombre = $_POST['nombre'];
$cevaluauno = $_POST['cevaluauno'];
$cevaluados = $_POST['cevaluados'];
$cevaluatres = $_POST['cevaluatres'];
$cevaluacuatro = $_POST['cevaluacuatro'];
$cevaluacinco = $_POST['cevaluacinco'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$mysqli->query("INSERT INTO cursos (token,nombre,cevaluauno,cevaluados,cevaluatres,cevaluacuatro,cevaluacinco,inicio,fin) VALUES('".$token."','".$nombre."','".$cevaluauno."','".$cevaluados."','".$cevaluatres."','".$cevaluacuatro."','".$cevaluacinco."','".$inicio."','".$fin."')");
 ?> 