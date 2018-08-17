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
                    <li><a href="form_busca.php">Buscar</a></li>
                    <li><a href="consultar.php">Consultas</a></li>
                </ul>
            </nav>
            
            <main>
            <section>
                    <h2>NOTICIAS</h2>
                    <div class="menu"><ul> 
                        <li><a href='consultar.php?CategoriaX=todas'><span></span>Todas</a></li>
                        <li><a href='consultar.php?CategoriaX=politica'><span></span>Politica</a></li>
                        <li><a href='consultar.php?CategoriaX=policial'><span ></span>Policial</a></li>
                        <li><a href='consultar.php?CategoriaX=tecnologia'><span ></span>Tecnologia</a></li>
                        <li><a href='consultar.php?CategoriaX=social'><span></span>Social</a></li>
                        <li><a href='consultar.php?CategoriaX=deportes'><span ></span>Deportes</a></li>
                    </ul></div>
                </section>



            <?php
                    include ("conexion.php");
                    $link = conectarse();
                    $instruccion = "SELECT titulo, texto, descripcion, fecha, imagen, concat(nombre,' ',apellidos) AS nombres 
                    FROM categoria AS c 
                    INNER JOIN noticias AS n ON c.idcategoria=n.idcategoria INNER JOIN autor AS a ON n.idautor=a.idautor 
                    ORDER BY fecha desc";
            ?>

            <table border="1">
            <tr bgcolor="#DDE3EE">
            <td bgcolor="#3498db" class="EstiloB">Titulo</td>
            <td bgcolor="#3498db" class="EstiloB">Categoría</td>
            <td bgcolor="#3498db" class="EstiloB">Imagen</td>
            <td bgcolor="#3498db" class="EstiloB">Artículo</td>
            <td bgcolor="#3498db" class="EstiloB">Autor</td>
            <td bgcolor="#3498db" class="EstiloB">Fecha</td>
            </tr>
            <?php
                $rs=mysql_query($instruccion) or die ("Fallo en la consulta");
                $n=mysql_num_rows($rs);
                while($campo=MySQL_fetch_array($rs)){
            ?>   
            <tr>
                 <td><?php echo $campo["titulo"]; ?></td>
                 <td><?php echo $campo["descripcion"]; ?></td>
                 <td><img src="<?php echo "$campo[imagen]"; ?>" width="100" height="100" /></td>
                 <td>><?php echo $campo["texto"]; ?></td>
                 <td><?php echo $campo["nombres"]; ?></td>
                 <td><?php echo $campo["fecha"]; ?></td>
            </tr>

                                
                <?php
                }
                mysql_close ($link);
                ?>
               </table>
               <br>
            </main>
        </div>
</body>
</html>