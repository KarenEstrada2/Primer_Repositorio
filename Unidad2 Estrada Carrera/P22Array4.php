<?php
/*CBTIS 89
P22Array4.php
Programa que almacena datos en un arreglo y posteriormente los imprime.
Karen Estrada
3°A Programación Matutino */

$equipo = array('portero'=>'Julio','defensa'=>'Diego','medio'=>'Jair','Delantero'=>'Rafa');
echo "** SELECCIÓN NACIONAL **", "<br>","<br>";
foreach ($equipo as $posicion => $jugador)
 {echo " el jugador " . $jugador . " es el " . $posicion;
echo "<br>", "<br>";
	
}
?>