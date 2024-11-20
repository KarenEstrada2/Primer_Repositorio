<?php
/* CBTIS 89
Programa que almacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimencional llamado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas.
Karen Estrada
Programacion 3°A Turno Matutino */

$Alumnos = array("luz ", "Fer ", "Leo ", "Ale ");
$Calificaciones = array(
	array(6, 4, 5), array(7, 9, 8), array(7, 9, 5), array(5, 4, 6));
$Promedio = array();
$sumaP=0;
$Status = array();

echo "CBTIS 89";
echo "<br>";
for ($i=0; $i<4 ; $i++) { 
	echo $Alumnos[$i]." ";
}

echo "<br>";
echo "Calificaciones";
echo "<br>";
for($i=0; $i<4;$i++)
{ for($j=0;$j<3;$j++)
{echo $Calificaciones[$i][$j]." ";}
echo "<br>";
}
    
echo $Alumnos[$i], "-------------",$Promedio, "-------", $Status, "<br>";



?>