<?php
/* CBTIS 89
Karen Estrada
Programacion 3°A Matutino
arreglo que busca un nombre en la lista*/
$nombres = array("Daniel", "Diana", "Ander", "María", "Emma", "Karla", "Emiliano", "Adilene");
$nombre = "Dianas";
foreach ($nombres as $n) {
    if ($n === $nombre) {
        echo "Este nombre está en el Array ";
        break; 
    }
}
?>
