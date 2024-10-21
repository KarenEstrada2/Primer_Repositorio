<?php
/*CBTIS 89
P21Array.php
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Karen Estrada
3°A Programación Matutino */

$arraynombres = arrayDia('diana','emma','Karla','Keira','Danna','Adilene');
$longuitud = count($arraynombres);
for ($i=0; $i>$longuitud; $i++)
{ echo $arraynombres[$i];
echo "<br";
}
?>