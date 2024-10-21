<?php
/*CBTIS 89
Programa que separa el dinero por valor 
Karen Estrada 
2°A Programación Matutino */

$Cheque = 2593;
echo "el cheque vale por ".$Cheque;
$B1000=floor($Cheque/1000);
$Cheque=$Cheque%1000; echo "<br>";
echo "la cantidad de billetes de 1000 es de ", $B1000; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$B500=floor($Cheque/500);
$Cheque=$Cheque%500; echo "<br>";
echo "la cantidad de billetes de 500 es de ", $B500; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$B200=floor($Cheque/200);
$Cheque=$Cheque%200; echo "<br>";
echo "la cantidad de billetes de 200 es de ", $B200; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$B100=floor($Cheque/100);
$Cheque=$Cheque%100; echo "<br>";
echo "la cantidad de billetes de 200 es de ", $B100; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$B50=floor($Cheque/50);
$Cheque=$Cheque%50; echo "<br>";
echo "la cantidad de billetes de 50 es de ", $B50; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$B20=floor($Cheque/20);
$Cheque=$Cheque%20; echo "<br>";
echo "la cantidad de billetes de 20 es de ", $B20; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$M10=floor($Cheque/10);
$Cheque=$Cheque%10; echo "<br>";
echo "la cantidad de monedas de 10 es de ", $M10; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$M5=floor($Cheque/5);
$Cheque=$Cheque%5; echo "<br>";
echo "la cantidad de monedas de 5 es de ", $M5; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$M2=floor($Cheque/2);
$Cheque=$Cheque%2; echo "<br>";
echo "la cantidad de monedas de 2 es de ", $M2; echo "<br>";
echo "<br>",$Cheque; echo "<br>";
$M1=floor($Cheque/1);
$Cheque=$Cheque%1; echo "<br>";
echo "la cantidad de monedas de 1 es de ", $M1; echo "<br>";
echo "<br>",$Cheque; echo "<br>";

?>