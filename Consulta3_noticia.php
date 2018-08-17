<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <title>Tacna 21</title>        
        <link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="contenedor">
	<header>
                <img width="100%" height="auto" src="image/baner.jpg" />
                <div class="titulo">SITIO DE NOTICIAS</div>
            </header>
            
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="form_agregar.php">Agregar Noticias</a></li>
                    <li><a href="mante_editar.php">Editar Noticias</a></li>
                    <li><a href="mante_eliminar.php">Eliminar Noticias</a></li>
                    <li><a href="listar_noticias.php">Listar Noticias</a></li>
                    <li><a href="form_busca.php">Buscar</a></li>
                    <li><a href="consultar.php">Consultas</a></li>
                </ul>
            </nav>

            <aside class="lateral"><!-- InstanceBeginEditable name="EditRegion1" -->Sistema de noticias<!-- InstanceEndEditable -->
                
            </aside>	
	<main>
	<h1>Consulta de noticias por categoria</h1>
	<form name="selecciona" action="Consulta3_noticia.php" method="POST">
		<p>Mostrar noticias de la categoria:
			<select name="categoria">
				<option value="Todas" selected>Todas
				<option value="Politica" selected>Politica
				<option value="Policial" selected>Policial
				<option value="Social" selected>Social
				<option value="Deportes" selected>Deportes
			</select>
		<input type="submit" name="actualizar" value="Actualizar"></p> 
	</form>

	<?php
	include("conexion.php");
		$link=conectarse();
			$instruccion = "SELECT * FROM noticias";
			$actualizar = $_REQUEST['actualizar'];
			$categoria = $_REQUEST['categoria'];
			if (isset($actualizar) && $categoria != "Todas")
				$instruccion = $instruccion . " WHERE categoria='$categoria' ";
				$instruccion = $instruccion . " WHERE categoria='$categoria'";
	?>
	</main>
	</div>
</body>
</html>