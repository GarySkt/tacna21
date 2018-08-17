<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
function conectarse()
{
	//Conectar con el servidor de base de datos
	if (!($link =mysql_connect("localhost","root","")))
	{
		echo "Error conectando a la Base de Datos.";
		exit();
	}
	if (!mysql_select_db("tacna21", $link))
	{
		echo "Error seleccionando Base de Datos.";
		exit();
	}
	return $link;
}
?>
</body>
</html>