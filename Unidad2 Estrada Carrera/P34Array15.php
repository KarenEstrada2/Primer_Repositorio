<?php
/* CBTIS 89
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto y de forma contraria es decir convierte una cadena de texto a elementos dentro de un arreglo
Karen Estrada
3°A Peogramación Matutino */

//almacena datos en un arreglo
$arraydatos = ["Karina", "Rosales", "Orozco"];

//convierte un array en una cadena de texto
$string = implode(" ", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//cadena de texto a separar
$cadena = "tercero de programacion Matutino";

//convierte una cadena de texto a un array
$array = explode(" ",$cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo don datos de tipo string <br>";
//imprime los elementos del arreglo
for($i=0; $i<$longitud; $i++)
{ //se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?>
