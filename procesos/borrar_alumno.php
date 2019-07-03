<?php 
include '../login/conn.php';
$id = $_POST['id'];
$mysqli->query("DELETE FROM usuarios WHERE id=".$id);
 ?>