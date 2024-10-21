<?php
/*CBTIS 89
Programa que agrega y elimina nombres y tambien los ordena de forma ascendente y descendente
Karen Estrada 
2°A Programación Matutino */

$nombre = array("Andy", "Diana", "Adilene", "Daniel", "Ander", "Karla");

echo "Datos del arreglo de forma ascendente por medio de un ciclo for";
sort($nombre);
foreach($nombre as $nombres){
      echo $nombres . " <BR>";
}
echo "<br>";

echo "posteriormente se agragaron cuatro datos y se eliminaron dos";
rsort($nombre);
foreach($nombre as $nombres){
      echo $nombres . " <BR>";}

echo "<br>";

echo "Datos del arreglo ordenados de forma descendente por medio de un ciclo for"
array_push($nombre,"Alejandro", "Keira", "Emma", "Emiliano");
foreach($nombre as $nombres){
      echo $nombres . " <BR>";
}
unset($nombre[Alejandro]);


echo "el número del elemento actual en el arreglo es: 8";
?>                