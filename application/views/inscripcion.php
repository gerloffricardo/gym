<?php

?>
<html>
	<head>
		<title>bienvenido</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/inscripcion.css") ?>"/>
	</head>
	<body>
		<div id="inscripcion">
		<?=form_open("index.php/Gym/inscripcion")?>
		<center>
		<span>
		<?php echo $mensaje ?>
		</span>
		</center>
			<fieldset>
			<legend>Alta usuario</legend>
			<label>Usuarios</label>
			<select name="idusuario">
			<?php
				foreach($usuarios->result() as $usuario)
				{
					echo"<option value='$usuario->idusuario'>$usuario->nombre $usuario->apellido</option>";
				}
			?>
			</select>
			<br />
			<label>clases</label>
			<select name="idclase">
			<?php
				foreach($clases->result() as $clase)
				{
					echo"<option value='$clase->idclase'>$clase->nombre </option>";
				}
			?>
			</select>
			<br />
			<label>fecha inscripcion</label>
			<input type="date" name="fecha"/>
			<br>
			<label>situacion de pago</label>
			<select name="pagado">
				<option value="pagado">pagado</option>
				<option value="no pagado">no pagado</option>
				
			</select>
			<br />
			<center><input	type="submit" name="btninscripto" value="inscribir"/></center>
			</fieldset>
		</form>
			<?=form_open("index.php/Gym/inscripcion")?>
		<center>
		<span>
		<?php echo $mensaje ?>
		</span>
		</center>
			<fieldset>
			<legend>avisar pago de usuario</legend>
			<label>Usuarios</label>
			<select name="idusuario">
			<?php
				foreach($usuarios->result() as $usuario)
				{
					echo"<option value='$usuario->idusuario'>$usuario->nombre $usuario->apellido</option>";
				}
			?>
			</select>
			<br />

			<label>situacion de pago</label>
			<select name="pagado">
				<option value="pagado">pagado</option>
				<option value="no pagado">no pagado</option>
				
			</select>
			<br />
			<center><input	type="submit" name="btnaviso" value="avisar pago"/></center>
			</fieldset>
		</form>
		<fieldset>
		<legend>usuarios inscriptos en el gimnasio</legend>
		<table border="1" width="100%">
			<tr>
				<th>usuario</th>
				<th>clase</th>
				<th>horario inicial</th>
				<th>horario final</th>
				<th>estado de pago</th>
			</tr>
			<?php
			foreach($inscriptos->result() as $inscripto)
				{
			?>
			<tr>
				<td><?php echo "$inscripto->nombre $inscripto->apellido" ?></td>
				<td><?php echo "$inscripto->clase" ?></td>
				<td><?php echo "$inscripto->horaini" ?></td>
				<td><?php echo "$inscripto->horafin" ?></td>
				<?php
					if($inscripto->pagado=="pagado")
						echo"<td id='pagado'>$inscripto->pagado</td>";
					else
						echo"<td id='nopagado'>$inscripto->pagado</td>";
				 ?>
				
			</tr>
			<?php	
				}
			?>
		</table>
		</fieldset>
		</div>
	</body>
</html>