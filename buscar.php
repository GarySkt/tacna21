<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
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
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="salir.php">Salir</a></li>
        </ul>
	</nav>
	<aside class="lateral">
		Sistema de Noticias		
	</aside>
	<main>
		<?php
		include ("conexion.php");
					$link=Conectarse();
					$texto=$_POST["texto"];
					trim($texto);
					
					if(!$texto)
					{
						echo "No has introducido la clave de busqueda";
						exit;
					}
					$sql="SELECT titulo, texto, descripcion, fecha, imagen, concat(nombre,' ',apellidos) AS nombres 
					FROM categoria AS c 
					INNER JOIN noticias AS n ON c.idcategoria=n.idcategoria INNER JOIN autor AS a ON n.idautor=a.idautor  WHERE texto like '%$texto%'";
					$resultado = mysql_query($sql);
					$num_resultados=mysql_num_rows($resultado);
					echo "<b>Numero de registros encontramos: ".$num_resultados."</b>";
					for ($i=0; $i < $num_resultados; $i++) 
					{ 
						$row=mysql_fetch_array($resultado);
						echo "<p><b>Registro nº: ".($i+1)."<br>"." <b>Titulo: </b>".$row["titulo"]."<br>";
						echo "<b>Articulo: </b>".$row["texto"]."<br>";
						echo "<b>Categoria: </b>".$row["descripcion"]."<br>"."<b>Autor: </b>".$row["nombres"]."<br>";
						echo "<b>Fecha: </b>".$row["fecha"]."</p>";
					}
		?>
	</main>
</div>

</body>
</html>