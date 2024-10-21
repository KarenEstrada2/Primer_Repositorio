<?php
/* CBTIS 89
P20Array2.php
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Estrada Carrera Karen Guadalupe
3°A Programación Matutino */
$nombre = "Anna";
$array = array(1,2,3, "casa", $nombre
);
//se obtiene el numero se elementos
$longitud = count($array);

//se recorre todos los elementos
for($i=0; $i<$longitud; $i++)
	{ //se obtiene el valor de cada elemento
		echo $array[$i];
		echo "<br>";
	}
	?>
