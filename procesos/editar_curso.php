<?php 
include '../login/conn.php';
$id = $_POST['id'];
$token = $_POST['token'];
$nombre = $_POST['nombre'];
$cevaluauno = $_POST['cevaluauno'];
$cevaluados = $_POST['cevaluados'];
$cevaluatres = $_POST['cevaluatres'];
$cevaluacuatro = $_POST['cevaluacuatro'];
$cevaluacinco = $_POST['cevaluacinco'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$mysqli->query("UPDATE cursos SET token='".$token."', nombre='".$nombre."', cevaluauno='".$cevaluauno."', cevaluados='".$cevaluados."', cevaluatres='".$cevaluatres."', cevaluacuatro='".$cevaluacuatro."', cevaluacinco='".$cevaluacinco."', inicio='".$inicio."', fin='".$fin."' WHERE id=".$id);
 ?>