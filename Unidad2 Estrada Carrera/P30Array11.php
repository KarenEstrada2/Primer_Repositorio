<?php
/*CBTIS 89
Programa puesto por el maestro, agrega un animal y le da un numero 
Karen Estrada 
2°A Programación Matutino */
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>