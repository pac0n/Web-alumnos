<?php 
include '../login/conn.php';
$queryResult=$mysqli->query("SELECT * FROM actividades");
$result=array();
while($fetchData=$queryResult->fetch_assoc())
{
	$result[]=$fetchData;
}
echo json_encode($result);
 ?>