<?php
/*CBTIS 89
P38Array18.php
programa que almacena datos en una arreglo multidimencional y posteriormente los imprime en diferentes posiciones.
Karen Estrada
3°A Programación Matutino */

$datos = array(
array(10, 20, 30), array(40, 50, 60), array(70, 80, 90));

echo "NORMAL";
echo "<br>";
for($i=0; $i<3;$i++)
{ for($j=0;$j<3;$j++)
{echo $datos[$i][$j]." ";}
echo "<br>";
}
echo "<br>";
echo "FILAS A COLUMNAS";
echo "<br>";
for($i=0; $i<3;$i++)
{ for($j=0;$j<3;$j++)
{echo $datos[$j][$i]." ";}
echo "<br>";
}
echo "<br>";
echo "COLUMNAS INVERSAS";
echo "<br>";
for($i=0;$i<3;$i++)
{ for($j=2;$j>=0;$j--)
{echo $datos[$i][$j]." ";}
echo "<br>";
}
echo "<br>";
echo "FILAS INVERSAS";
echo "<br>";
for($i=0; $i<3;$i++)
{ for($j=2;$j>=0;$j--)
{echo $datos[$j][$i]." ";}
echo "<br>";
 }    
 echo "<br>";
echo "ESPEJO";
echo "<br>";
for($i=2;$i>=0;$i--) 
{for($j=2;$j>=0;$j--)
{echo $datos[$j][$i]." ";}
echo "<br>"; 
}               
?>