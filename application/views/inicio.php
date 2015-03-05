<?php

?>
<html>
	<head>
		<title>bienvenido</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/inicio.css") ?>"/>
	</head>
	<body>
		<div id="login">
		<?=form_open("index.php/Gym/index")?>
		<center>
		<span>
		<?php echo $mensaje ?>
		</span>
		</center>
			<fieldset>
			<legend>LOGIN</legend>
			<label>Usuario</label>
			<input type="text" name="usuario"/>
			<br>
			<label>clave</label>
			<input type="text" name="clave"/>
			<br />
			<center><input	type="submit" name="btnlogin" value="entrar a sistemas"/></center>
			</fieldset>
		</form>
		</div>
	</body>
</html>