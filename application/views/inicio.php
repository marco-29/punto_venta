<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Inicio</title>
</head>

<body>

	<div id="container">
		<h1>Estoy aqui</h1>
		<p><?php echo base_url() ?></p>
		<br>
		<p><?php print_r($rel_usuarios_roles) ?></p>
		<br>
		<table border>
			<thead>
				<tr>
					<th>#</th>
					<th>nombre</th>
					<th>rol_id</th>
					<th>rol</th>
				</tr>
			</thead>
			<?php foreach ($rel_usuarios_roles as $key => $value) : ?>
				<tbody>
					<tr>
						<td><?php echo $value->usuario_id; ?></td>
						<td><?php echo $value->usuarios_nombre; ?></td>
						<td><?php echo $value->rol_id; ?></td>
						<td><?php echo $value->roles_rol; ?></td>
						<td><?php echo $value->fecha_registro; ?></td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>

	</div>

</body>

</html>