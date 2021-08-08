<?php
require_once "../modelos/Departamento.php";

$departamento =new Departamento();

//$var=$departamento->mostrar('6');

$var=$departamento->listar();
echo "registros listar, no filtra registros inactivos";
var_dump($var);
	echo "<br>";
	echo "<br>";
while ($reg=$var->fetch_object()){
	var_dump($reg);
	echo "<br>";
	echo "<br>";
}

/*
$var=$departamento->select();
echo"registros listar, unicamente activos";
var_dump($var);
	echo "<br>";
	echo "<br>";
while ($reg=$var->fetch_object()){
	var_dump($reg);
	echo "<br>";
	echo "<br>";
}
*/
/*
$id01 = $departamento->insertar("Sistemas");
echo "id del departamento: $id01 <br>";

$id01 = $departamento->insertar("V entas");
echo "id del departamento: $id01 <br>";

$id01 = $departamento->insertar("Marketing");
echo "id del departamento: $id01 <br>";

$id01 = $departamento->insertar("Rh");
echo "id del departamento: $id01 <br>";

*/
/*
$fechaActualizacion=date("Y-m-d H:i:s");

$departamento->editar('7','Finanzas',$fechaActualizacion,'3');
*/
/*
$departamento->desactivar('3');
$departamento->desactivar('6');

$departamento->activar('6');
*/

?>