<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="utf-8">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Tacna 21 CALLE</title>
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
            
            <aside class="lateral"><!-- InstanceBeginEditable name="EditRegion1" --><!-- InstanceEndEditable -->
                
            </aside>
            
            <main><!-- InstanceBeginEditable name="EditRegion2" -->
				<?php
                //Incluir modulo de conexion
                include ("conexion.php");
                // abrir la conexion con el servidor de base de datos
                $link=Conectarse();
                    // Enviar consulta
                    $instruccion = $instruccion = "SELECT titulo, texto, descripcion, fecha, imagen, concat(nombre,' ',apellidos) AS nombres 
                    FROM categoria AS c 
                    INNER JOIN noticias AS n ON c.idcategoria=n.idcategoria INNER JOIN autor AS a ON n.idautor=a.idautor 
                    ORDER BY fecha desc";
                ?>
                <section>
                     <table width="557" border="1" align="center" cellpadding="0" cellspacing="1">
                        <tr bgcolor="#DDE3EE">
                            <td bgcolor="#0099CC" class="EstiloB">Titulo</td>
                            <td bgcolor="#0099CC" class="EstiloB">Noticia</td>
                            <td bgcolor="#0099CC" class="EstiloB">Imagen</td>
                            <td bgcolor="#0099CC" class="EstiloB">Autor</td>
                            <td bgcolor="#0099CC" class="EstiloB">Categoria</td>
                            <td bgcolor="#0099CC" class="EstiloB">Fecha</td>
                                    </tr>
                            <?php
                            //envia una sentencia a la base activa en el servidor asociado
                            //en este caso a la sentencia sql
                            $rs=mysql_query($instruccion)
                            or die ("Fallo en la consulta");
                            //devuelve el numero de filas (registros) encontrados
                            $n=mysql_num_rows($rs);
                            //Devuelve una matriz que corresponde a la sentencia extraida, o falso si no
                            //quedan màs filas
                            while($campo=MySQL_fetch_array($rs)) {
                            ?>
                        <tr>
                           <td width="114" class="Estilo7"><?php echo $campo["titulo"]; ?></td>
                            <td width="260" class="Estilo7"><?php echo $campo["texto"]; ?></td>
                            <td width="260" class="Estilo7"><img src="<?php echo "$campo[imagen]"; ?>" width="100" height="100" /></td>
                            <td width="63" class="Estilo7"><?php echo $campo["nombres"]; ?></td>
                            <td width="79" class="Estilo7"><?php echo $campo["descripcion"]; ?></td>
                            <td width="91" class="Estilo7"><?php echo $campo["fecha"]; ?></td>
                        </tr>
                <?php
                }
                // Cerrar la conexion con la base de datos
                    mysql_close ($link);
                ?>
                    </table>
                </section>
                   
			<!-- InstanceEndEditable -->
                
            </main>
        </div>
</body>
<!-- InstanceEnd --></html>