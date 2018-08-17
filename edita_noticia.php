<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tacna 21 CALLE</title>
</head>

<body>
	<?php
		//Incluir modulo de conexion
		include ("conexion.php");
			$id = $_POST['id'];
			$titulo = $_POST['titulo'];
			$autor = $_POST['autor'];
			$categoria = $_POST['categoria'];
			$articulo = $_POST['articulo'];
			$fecha = $_POST['fecha'];
			$link = Conectarse();
			
		$sql="UPDATE noticias SET titulo='$titulo', autor='$autor', categoria='$categoria', articulo='$articulo',fecha='$fecha' WHERE id='$id'";
		
			$rs=mysql_query($sql);
			if($rs==1){
				echo "<br>";
				echo "<center>El Registro fue Actualizado con Exito</center>";
				echo "<br>";
				echo "<center><a href=\"index.php\">Retinar</a></center>";
			}else{
				echo "<br>";
				echo "<center>Error al Actualizar el registro</center>";
				echo "<br>";
				echo "<center><a href=\"mante_editar.php\">Retomar</a></center>";
			}
	?>
</body>
</html>