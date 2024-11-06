<?php
/*CBTIS 89
Programa que separa los numeros negativos y positivos y los imprime en una suma
Karen Estrada
Programacion 3°A Matutino */

$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivos = array();
$arraynegativos = array();
$sumaN=0;
$sumaP=0;

foreach ($arraynumeros as $numero) {
    if ($numero >= 0) {
        $arraypositivos[] = $numero;
        $sumaP += $numero;  
    } else {
        $arraynegativos[] = $numero;
        $sumaN += $numero; 
    }
}

echo "Números positivos: ";
print_r($arraypositivos);
echo "<br>";
echo "Suma de los números positivos: " . $sumaP . "<br>";


echo "Números negativos: ";
print_r($arraynegativos);
echo "<br>";
echo "Suma de los números negativos: " . $sumaN . "<br>";






?>
 