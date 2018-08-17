<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
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
                    <li><a href="form_agregar.php">Agregar Noticias</a></li>
                    <li><a href="mante_editar.php">Editar Noticias</a></li>
                    <li><a href="mante_eliminar.php">Eliminar Noticias</a></li>
                    <li><a href="listar_noticias.php">Listar Noticias</a></li>
                    <li><a href="form_busca.php">Buscar</a></li>
                    <li><a href="consultar.php">Consultas</a></li>
                </ul>
            </nav>
            
            <aside class="lateral"
            >Sistema de noticias
                
            </aside>
            
            <main><!-- InstanceBeginEditable name="EditRegion2" -->
            	<h1>Agregar Noticia</h1><br>
                <?php
                    include ("conexion.php");
                    $link=Conectarse();
                    $idAutor=array();
                    $idCategoria=array();
                ?>  
            	<form action="agregar.php" method="post" enctype="multipart/form-data">
					Titulo: <br><input type="text" name="titulo"><br>
                    Categoria:<br>
                    <?php 
                        $contCat=0;
                        $instruccion = "SELECT idcategoria, descripcion FROM categoria";
                        $rs=mysql_query($instruccion,$link) or die ("Fallo en la consulta");
                        $n=mysql_num_rows($rs);
                        print("<select name='categoria' id='categoria'>\n"); 
                        while($campo=MySQL_fetch_array($rs))
                        {
                            $idAutor=array($contCat,$campo["idcategoria"]);
                            print("<option value=".$campo["idcategoria"].">".$campo["descripcion"]."</option>\n");
                        }
                        print("</select><br>\n");
                    ?>
                    Escriba la noticia: <br><textarea name="texto"></textarea><br>
                    Autor: <br>
                    <?php 
                        $contAut=0;
                        $instruccion2 = "SELECT idautor, nombre FROM autor";
                        $rs2=mysql_query($instruccion2,$link) or die ("Fallo en la consulta");
                        $n2=mysql_num_rows($rs);
                        print("<select name='autor' id='autor'>\n"); 
                        while($campo2=MySQL_fetch_array($rs2))
                        {
                            $idCategoria=array($contAut,$campo["idautor"]);
                            print("<option value=".$campo2["idautor"].">".$campo2["nombre"]."</option>\n");
                        }
                        print("</select><br>\n");
                    ?>
                    Imagen: <br><input type="file" name="foto" id="foto"><br><br>
                    <button type="submit" value="Publicar">Publicar</button>
				</form>
			<!-- InstanceEndEditable -->
                
            </main>
        </div>
</body>
<!-- InstanceEnd --></html>