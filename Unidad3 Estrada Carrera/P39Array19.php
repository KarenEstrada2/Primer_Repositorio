<?php 
/*CBTS 89 P36Array16.php
Programa que almacena informacion de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes coniciones:
menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y un 0 sila persona tiene entre
18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y un 0 si la persona tiene
50 años o más se debe colocar un 1 en el arreglo $Grupo3 y en los otros dos un 0.

Karen Estrada
3°A Programación Matutino */

$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad=array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for($i=0; $i<6; $i++)
	{ if ($Edad[$i]<18)
		{array_push($Grupo1,1);
		array_push($Grupo2,0);
		array_push($Grupo3,0);}
	if ($Edad[$i]>=18 && $Edad[$i]<=49)
		{array_push($Grupo1,0);
		array_push($Grupo2,1);
		array_push($Grupo3,0);}
	if($Edad[$i]>=50)
		{array_push($Grupo1,0);
		array_push($Grupo2,0);
		array_push($Grupo3,1);}} 

 echo "Nom " . "Edad " . "Gpo1 " . "Gpo2 " . "Gpo3";
 echo "<br>";
		for($j=0; $j<6; $j++)
			{echo $Nombre[$j],"---",$Edad[$j],"---",$Grupo1[$j],"---",$Grupo2[$j],"---",$Grupo3[$j];
		echo "<br>";}