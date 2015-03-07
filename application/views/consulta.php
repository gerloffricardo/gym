<?php

?>
<html>
	<head>
		<title>bienvenido</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/inscripcion.css") ?>"/>
	</head>
	<body>
		<div id="inscripcion">
		<?=form_open("index.php/Gym/consulta")?>
		<center>
		<span>
		<?php echo $mensaje ?>
		</span>
		</center>
			<fieldset>
			<legend>busqueda de usuario</legend>
			<label>Usuario</label>
			
			<input type="text" name="usuario"/>
			
			<center><input	type="submit" name="btnconsulta" value="buscar usuario"/></center>
			</fieldset>
		</form>
		<fieldset>
		<legend>informacion del usuario</legend>
		<table border="1" width="100%">
			<tr>
				<th>usuario</th>
				<th>telefono</th>
				<th>correo</th>
				<th>edad</th>
				<th>clase</th>
				<th>horario inicial</th>
				<th>horario final</th>
				<th>estado de pago</th>
			</tr>
			<?php
			if($infousuario->result())
			{
				
			
			foreach($infousuario->result() as $info)
				{
			?>
			<tr>
				<td><?php echo "$info->nombre $info->apellido" ?></td>
				<td><?php echo "$info->telefono" ?></td>
				<td><?php echo "$info->correo" ?></td>
				<td><?php echo "$info->edad" ?></td>
				<td><?php echo "$info->clase" ?></td>
				<td><?php echo "$info->horaini" ?></td>
				<td><?php echo "$info->horafin" ?></td>
				<?php
					if($info->pagado=="pagado")
						echo"<td id='pagado'>$info->pagado</td>";
					else
						echo"<td id='nopagado'>$info->pagado</td>";
				 ?>
				
			</tr>
			<?php	
				}
				}
				else
				{
					echo"debe realizar una busqueda para mostrar informacion";
				}
			?>
		</table>
		</fieldset>
		</div>
	</body>
</html>