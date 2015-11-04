<?php
include "../framework/aplication/Database.php";

if($_GET){
	
	$conditions = array(
		'conditions'=> 'id='.$_GET['id']
	);
	
	if (isset($_GET['id'])) {
		if($db->delete('usuarios', $conditions['conditions'])){
			echo "Datos eliminados correctamente";
		}else{
			echo "Error al eliminar los datos";
		}
	}
}