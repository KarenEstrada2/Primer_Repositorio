<?php
/* CBTIS 89
P40Array20.php
Programa que almacena por medios de un ciclo los numeros del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los numeros pares, en el $Arreglo2 van los numeros impares, en el $Arreglo3 va la suma de los numeros correspondiente al mismo indice.
Karen Estrada
3°A Programación Matutino */

$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();
$res=0;
$r=0;
$n=150;

echo "Arreglo 1 ", "Arreglo 2 ", "Arreglo 3 ", "<br>";
for($i=0;$i<52;$i++)
	{$r=$n % 2;
		if ($r==0)
			{array_push($Arreglo1,$n);}
		else if ($r!=0)
			{array_push($Arreglo2,$n);}
	$n++;
	}
	
	for ($i=0;$i<26;$i++) { 
		$Arreglo3[$i]=$Arreglo1[$i]+$Arreglo2[$i];
	 }
	for ($i=0; $i<26 ; $i++) { 
	echo $Arreglo1[$i],"----------",$Arreglo2[$i],"----------",$Arreglo3[$i], "<br>";
}
?>