
<!DOCTYPE html>
<html>
<body>

<h2>Listado de Usuario</h2>

<ol>
	<?php

$miarchivo = fopen("usuario.txt", 'r');
while (!feof($miarchivo))	{

	$objeto =json_decode(fgets($miarchivo));//lo que va a leer el archivo
	//var_dump($objeto);
	echo "<li>".$objeto->Nombre."</li>";
	echo "<li>".$objeto->Apellido."</li>";
}			
fclose($miarchivo)
?>	
</ol>

</body>
</html>