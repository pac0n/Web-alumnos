<?php 
include '../login/conn.php';
$id_curso=$_POST['id_curso'];
$vista = "CREATE OR REPLACE VIEW v_asistencia AS SELECT curso_alumno.id_curso,curso_alumno.matricula, curso_alumno.nombre_curso, usuarios.nombre, usuarios.ap_paterno, usuarios.ap_materno FROM curso_alumno INNER JOIN usuarios ON curso_alumno.matricula=usuarios.matricula";
$mysqli->query($vista);
$buscar=$mysqli->query("SELECT * FROM cursos WHERE id='$id_curso'");
$result=array();
while($fetchData=$buscar->fetch_assoc())
{
	$result[]=$fetchData;
}
echo json_encode($result);
 ?>