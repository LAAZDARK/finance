<?php

require_once "../modelos/Departamento.php";

$departamento=new Departamento();
$idDepartamento=isset($_POST['idDepartamento'])?limpiarCadenas($_POST['idDepartamento']):"";
$descripcion=isset($_POST['descripcion'])?limpiarCadenas($_POST['descripcion']):"";
$fechaActualizacion=date("Y-m-d H:i:s");
$idEmpActualiza=1;

switch ($_GET["op"]) {
	case 'listar':
	   $rspta=$departamento->listar();
	   $data=Array();
	   while ($reg=$rspta->fetch_object()) {
	   	$data[]=array(
	   		"0"=>($reg->activo)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamento.')"><i class="far fa-edit"></i></botton>'.
	   		'<button class="btn btn-danger" onclick="desactivar('.$reg->idDepartamento.')"><i class="far fa-window-close"></i></botton>':'<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamento.')"><i class="fa fa-pencil"></i></button>'.
	   		'<botton class="btn btn-primary" onclick="activar('.$reg->idDepartamento.')"><i class="far fa-check-square"></i></button>',
	   		"1"=>$reg->descripcion,
	   		"2"=>$reg->fechaCreacion,
	   		"3"=>$reg->fechaActualizacion,
	   		"4"=>($reg->activo)?'<span class="badge badge-success">Activado</span>':'<span class="badge badge-danger">Desactivado</span>',
	   		"5"=>$reg->idEmpActualiza
	   	);
	   }
	   $results=array(
	   	  "sEcho"=>1,
	   	  "iTotalRecords"=>count($data),
	   	  "iTotalDisplayRecords"=>count($data),
	   	  "aaData"=>$data);
	   echo json_encode($results);
		break;

	case 'guardaryeditar':
	   if(empty($idDepartamento)){
	   	 $rspta=$departamento->insertar($descripcion);
	   	 echo $rspta!=0?"Departamento registrado":"Error departamento no resgistrado";
	   }else{
	   	  $rspta=$departamento->editar($idDepartamento,$descripcion, $fechaActualizacion, $idEmpActualiza);
	   	 echo $rspta!=0?"Departamento actualizado":"Error departamento no actualizado";
	   }
		break;

	case 'mostrar':
		$rspta= $departamento->mostrar($idDepartamento);
		echo json_encode($rspta);
		break;

	case 'desactivar':
		$rspta=$departamento->desactivar($idDepartamento);
		echo $rspta?"Departamento desactivado":"Error el depto no se pudo desactivar";
		break;

	case 'activar':
		$rspta=$departamento->activar($idDepartamento);
		echo $rspta?"Departamento activado":"Error el depto no se pudo activar";
		break;


	
}


?>