<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tacna 21 CALLE</title>
</head>

<body>
	<?php
		//conectamos a la base de datos
		//Incluimos el modulo de conexion
		include ("conexion.php");
		
		//abrir la conexion
		$link=Conectarse();
		
		//recibimos las variable $id
		$id=$_GET[id];
		
		//borramos los registros pertenecientes a la id
		if (isset($id)){
			$instruccion="delete from noticias where id='$id'";
			$result=mysql_query($instruccion,$link);
			
			echo "<br>";
			echo "<br>";
			echo "<h3>El Registro fue eliminado con exito</h3>";
			echo "<br>";
			echo "<a href=\"mante_eliminar.php\">Retornar</a>";
			
			//header("location");
		}else{
			echo "<br>";
			echo "<h3>Error al Eliminar Registro</h3>";
			echo "<br>";
			echo "<a href=\"mante_eliminar.php\">Retornar</a>";
		}
	?>
</body>
</html>