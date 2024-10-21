<?php
/*CBTIS 89
P23Array5.php
Programa que almacena datos en un arreglo y posteriormente los imprime.
Karen Estrada
3°A Programación Matutino */

$fruteria = array('25'=>'manzana','40'=>'mango','35'=>'limon','20'=>'naranja');
echo "** FRUTERIA DEL SUR **", "<br>","<br>";
foreach ($fruteria as $precio => $fruta)
 {echo " el kilo de " . $fruta . " cuesta " . $precio;
echo "<br>", "<br>";
	
}
?>