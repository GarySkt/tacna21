<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tacna 21 CALLE</title>
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
			                    <li><a href="form_buscar.php">Buscar</a></li>
			                    <li><a href="consultar.php">Consultas</a></li>
			                </ul>
			    </nav>
		        <aside class="lateral"
		            >Sistema de noticias
		                
		        </aside>
		        <main>
		        	<?php
					include ("conexion.php");
					$link=Conectarse();
					$titulo=$_POST["titulo"];
					$autor=$_POST["autor"];
					$categoria=$_POST["categoria"];
					$articulo=$_POST["texto"];

					$foto=$_FILES["foto"]["name"];
					$ruta=$_FILES["foto"]["tmp_name"];
					$destino="image/".$foto;
					copy($ruta,$destino);
					
					$instruccion = "INSERT INTO noticias(titulo,texto,idcategoria,fecha,imagen,idautor) 										                     				VALUES('$titulo','$articulo','$categoria',NOW(),'$destino','$autor')";
					mysql_query($instruccion);	
					print ("<p>Registro Agregado con exito!!</p>\n");	
				?>
		        </main>
				
				</div>
		</body>		
</html>