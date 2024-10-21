<?php
/*CBTIS 89
Programa de operaciones con arreglos 
Karen Estrada 
2°A Programación Matutino */
$arrayN1 = array(10,20,30,40,50);
$arrayN2 = array(3,7,6,15,17);
$suma = array();
$resta = array();
$multi = array();
$divi = array();


$longitud= count($arrayN1);

for ($i=0; $i <$longitud ; $i++) { 
$suma[$i]= $arrayN1[$i]+$arrayN2[$i];
$resta[$i]= $arrayN1[$i]+$arrayN2[$i];
$multi[$i]= $arrayN1[$i]+$arrayN2[$i];
$divi[$i]= $arrayN1[$i]+$arrayN2[$i];
}
echo "SUMA ENTRE ARREGLOS";
for ($i=0; $i <$longitud ; $i++) { 
	echo $arrayN1[$i]."   +   ".$arrayN2[$i]."   =   ".$suma[$i];
	echo "<br>";
}
	echo "<br>";

echo "RESTA ENTRE ARREGLOS";
for ($i=0; $i <$longitud ; $i++) { 
	echo $arrayN1[$i]."   -   ".$arrayN2[$i]."   =   ".$resta[$i];
	echo "<br>";
}
echo "<br>";
Echo "MULTIPLICACION ENTRE ARREGLOS";
for ($i=0; $i <$longitud ; $i++) { 
	echo $arrayN1[$i]."   *   ".$arrayN2[$i]."   =   ".$multi[$i];
	echo "<br>";
}
echo "<br>";
echo "DIVICION ENTRE ARREGLOS";
for ($i=0; $i <$longitud ; $i++) { 
	echo $arrayN1[$i]."   /   ".$arrayN2[$i]."   =   ".$divi[$i];
	echo "<br>";
}

?>