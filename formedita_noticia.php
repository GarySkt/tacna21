<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="utf-8">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Tacna 21-CALLE</title>
        <!-- InstanceEndEditable -->
        <link href="estilo.css" rel="stylesheet" type="text/css">
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
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
            
            <main><!-- InstanceBeginEditable name="EditRegion2" -->
				<?php 
//incluir modulo de conexion
include ("conexion.php");
//recuperamos el id
			$id=$_GET['id'];
			$link=conectarse();
			$sql="SELECT * FROM noticias WHERE id='$id'";
			$rs=mysql_query($sql);
			$campo=mysql_fetch_array($rs)
			?>
            <h3 align="center" class="Estilo2">EDITAR NOTICIA</h3>
<form method="post" action="edita_noticia.php" enctype="multipart/form-data">
            <table border="0" align="center">
            <tr><td width="95"></td>
            </tr>
            <tr>
            <td><div align="right"><strong>Titulo:</strong></div></td>
            <td><input name="titulo" type="text" id="titulo" value="<?php echo $campo["titulo"];?>"size="35" /></td>
            </tr>
            <tr><td><div align="right"><strong>Autor:</strong></div></td>
            <td width="492"><input name="autor" type="text" id="autor" value="<?php echo $campo["autor"];?>" size="35" /></td>
            </tr>
            <tr><td><div align="right"><strong>Categoria:</strong></div></td>
            <td><input name="categoria" type="text" id="categoria" value="<?php echo $campo["categoria"];?>" size="35"/></td>
            </tr>
            <tr><td><div align="right"><strong>Articulo:</strong></div></td>
            <td><textarea name="articulo" cols="65" rows="10" id="articulo"><?php echo $campo["articulo"];?></textarea></td>
            </tr><tr>
            <td><div align="right"><strong>Fecha:</strong></div></td>
            <td><input name="fecha" type="text" id="fecha" value="<?php echo $campo["fecha"];?>" size="35" /></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td><div align="left">
            <input name="Enviar" type="submit" id="Enviar" value="Enviar"/>
            </div></td>
            </tr>
            </table>
            <br/>
            <input type="hidden" value="<?php echo $id;?>" name="id" id="id" />
            </form>
			<!-- InstanceEndEditable -->
                
            </main>
        </div>
</body>
<!-- InstanceEnd --></html>