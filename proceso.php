<?php
include "../framework/aplication/Database.php";

if($_POST){
	
	if (isset($_POST['add'])) {
		if($db->save('usuarios', $_POST)){
			echo "Datos guardados correctamente";
		}else{
			echo "Error al guardar los datos";
		}
	}

	if (isset($_POST['edit'])) {
		if($db->update('usuarios', $_POST)){
			echo "Datos actualizados correctamente";
		}else{
			echo "Error al actualizar los datos";
		}
	}
}