<?php
/*CBTIS 89
Programa de una tienda de ropa el cual imprime lo precios de los articulos de manera aleatoria y que al tener cierta cantidad de dinero se les hace un descuento.
Karen Estrada 
2°A Programación Matutino */

$merca = array(
    '600' => 'pantalon',
    '2600' => 'zapatos',
    '250' => 'camisa',
    '700' => 'chamarra'
);

echo "** MIUMIU **", "<br><br>";

foreach ($merca as $precio => $ropa) {
    echo "Esta prenda " . $ropa . " cuesta " . $precio . " <br><br>";
}

echo "** DESCUENTOS **", "<br><br>";
echo "Si compra más de 1000 tiene un descuento del 10% <br><br>";
echo "Si compra más de 2000 tiene un descuento del 20% <br><br>";
echo "Si compra más de 3000 tiene un descuento del 30% <br><br>";

echo "** TICKET **", "<br><br>";


$selectedKeys = array_rand($merca, 3);
$totalAmount = 0;

foreach ($selectedKeys as $key) {
    $precio = $key; 
    $ropa = $merca[$key]; 
    $totalAmount += $precio; 
    echo "Artículo: " . $ropa . " - Precio: " . $precio . "<br>";
}

echo "<br>El subtotal es: " . $totalAmount . "<br><br>";

$des = 0;

if ($totalAmount > 3000) {
    $des = $totalAmount * 0.30;
    echo "Tu descuento es: " . $des . "<br>";
} elseif ($totalAmount > 2000) {
    $des = $totalAmount * 0.20;
    echo "Tu descuento es: " . $des . "<br>";
} elseif ($totalAmount > 1000) {
    $des = $totalAmount * 0.10;
    echo "Tu descuento es: " . $des . "<br>";
} else {
    echo "No hay descuento aplicable.<br>";
}

$totalToPay = $totalAmount - $des;
echo "El total a pagar es: " . $totalToPay;
?>
