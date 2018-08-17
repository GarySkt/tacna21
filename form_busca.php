<!DOCTYPE html>
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
				<li><a href="form_agregar.php">Insertar Noticias</a></li>
				<li><a href="mante_editar.php">Editar Noticias</a></li>
				<li><a href="mante_eliminar.php">Eliminar Noticias</a></li>
				<li><a href="listar_noticias.php">Listar Noticias</a></li>
				<li><a href="form_busca.php">Buscar</a></li>
				<li><a href="consultar.php">Consultas</a></li>
			</ul>
		</nav>
	

	<aside class="lateral">
		Sistema de noticias
	</aside>
	<main>
	<h1>Busqueda de Noticias</h1>
	    <form id="form1" name="form1" method="post" action="buscar.php">
	    
	  	  	<table width="596" border="0" align="center">
	    		<tr>
	   				<td width="352">Texto a Buscar:
	    				<input name="texto" type="text" id="texto" size="35" /></td>
	    			<td width="228"><input type="submit" name="buscar" id="buscar" value="Buscar" /></td>
	    		</tr>
	    
	    	</table>
	    </form>
	</main>	

	</div>
</body>
</html>