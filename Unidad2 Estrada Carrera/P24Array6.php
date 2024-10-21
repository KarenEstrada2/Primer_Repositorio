<?php
/*CBTIS 89
P22Array4.php
Programa que almacena datos en un arreglo y posteriormente los imprime.
Karen Estrada
3°A Programación Matutino */

$escuela = array('Programación'=>'Lola ','ARH'=>'Alexa','Arquitectura'=>'Dana','Programación'=>'Diana','Logistica'=>'Miriam');
echo "** ALUMNOS **", "<br>","<br>";
foreach ($escuela as $carrera => $alu)
 {echo " el alumno " . $alu . " estudia en el CBTIS 89 en la carrera de " . $carrera;
echo "<br>", "<br>";
	
}
?>