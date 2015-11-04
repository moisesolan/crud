<?php

include "../framework/aplication/Database.php";

$options = array(
		'field'=> 'id, email, username, password, status',
		'order'=> 'usuarios.id ASC',
		'limit'=> '0, 9'
	);
$usuarios = $db->find('usuarios', 'all', $options);

$numeroUsuarios= $db->find('usuarios', 'count', null);
?>
<h2>Numero de usuarios: <?php echo $numeroUsuarios; ?> </h2>


<table border="1">
	<h3><a href="add.php">Agregar</a><br><br></h3>
	<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Estatus</th>
		<th>Accion</th>
	</tr>
	
		<?php foreach ($usuarios as $usuario) : ?>
		<tr>
			<td><?php echo $usuario['id']; 			?></td>
			<td><?php echo $usuario['email']; 		?></td>
			<td><?php echo $usuario['username'];	?></td>
			<td><?php echo $usuario['password'];	?></td>
			<td><?php echo $usuario['status']; 		?></td>
			<td>
				<a href="edit.php?id=<?php echo $usuario['id']; ?>">Editar </a>
				<a href="delete.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php endforeach; ?>	
</table>
