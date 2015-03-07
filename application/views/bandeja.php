<?php

?>
<html>
	<head>
		<title>bienvenido</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bandeja.css") ?>"/>
	</head>
	<body>
		<div id="contenedor">
			<div id="encabezado">
			foto
			</div>
			<div id="menu1">
				<fieldset>
				<legend>Menu</legend>
				<ul>
				<li><a href="<?php echo site_url("index.php/Gym/inscripcion") ?>" target="centro">insripcion</a></li>
				<li><a href="<?php echo site_url("index.php/Gym/consulta") ?>" target="centro">consulta</a></li>
				<li><a href="<?php echo site_url("index.php/Gym/pago") ?>" target="centro">avisarpago</a></li>
				<li><a href="<?php echo site_url("index.php/Gym/novedades") ?>" target="centro">novedades</a></li>
				</ul>
				</fieldset>
			</div>
			<div id="menu2">
				<iframe id="ifra" name="centro" width="100%" height="100%" frameborder="0" src="<?php echo site_url("index.php/Gym/novedades") ?>"></iframe>
			</div>
		</div>
	</body>
</html>