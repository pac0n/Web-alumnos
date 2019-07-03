<?php 
include '../login/conn.php';
$id = $_POST['id'];
$mysqli->query("DELETE FROM actividades WHERE id=".$id);
 ?>