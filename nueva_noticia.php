<?php
include("conexion.php");
$link=Conectarse();
$query_categoria="SELECT * FROM categoria";
$query_categoria = mysql_query($query_categoria);

$query_autor="SELECT * FROM autor";
$resultado_autor = mysql_query($query_autor);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tacna 21 - CALLE</title>
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
                    <li><a href="FormBuscar_Noticia.php">Buscar</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </nav>
            
            <aside class="lateral">Sistema de noticias en linea</aside>
            
            <main>
            <h1>Agregar Noticia</h1><br>
                <table>
            	<form action="agregar.php" method="post">
                	
					<td>Titulo noticia:</td>
					<td><input type="text" name="titulo"/></td>
					<td>Autor:</td>
					<td><select name="idautor">
						<?php
                        if ($resultado_autor)
                        while($campo_autor = mysql_fetch_array($resultado_autor))
                        {
                        	$nombre=$campo_autor['nombre'];
                            $apellido=$campo_autor['apellidos'];
                            $id=$campo_autor['idautor'];
                            echo "<option value='.$id.'>'.$nombre.' '.'apellido.'</option>\n";
                        }
                        mysql_close($link);
                        ?>
					</select></td>
					<td>Categoria:</td>
					<!--<input type="text" name="categoria"/>-->
					<td><select name="idcategoria">
						<?php
                        if ($resultado_categoria)
                        while($campo_categoria = mysql_fetch_array($resultado_categoria))
                        {
                        	$nombre=$campo_categoria['nombrecat'];
                            $id=$campo_categoria['idcategoria'];
                            echo "<option value=".$id.">".$nombre."</option>\n";
                        }
                        mysql_close($link);
                        ?>
					</select></td>
					<td><label>Escriba el articulo:</label></td>
					<td><textarea name="texto"></textarea></td>
					<td><input type="submit" value="Publicar"></td>
                    
				</form>
                </table>
		</main>
        </div>
</body>
</html>