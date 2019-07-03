<?php 
include '../login/conn.php';
$queryResult=$mysqli->query("SELECT * FROM cursos");
$result=array();
while($fetchData=$queryResult->fetch_assoc())
{
	$result[]=$fetchData;
}
echo json_encode($result);
 ?>