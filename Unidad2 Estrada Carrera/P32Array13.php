<?php
/*CBTIS 89
Karen Estrada 
2°A Programación Matutino */
$productos = ["camisa", "pantalon", "cinturon"];
echo "array de productos iniciales:<br>";
foreach ($productos as $productos) {
	echo $productos . "<br>";
}
echo "<br> Array de productos en orden ascendente:<br>";
sort($productos);
foreach ($productos as $productos) {
	echo $productos . "<br>";

echo "<br> Array de productos en orden descendientes:<br>";
rsort($productos);
foreach ($productos as $productos) {
	echo $productos . "<br>";
?>