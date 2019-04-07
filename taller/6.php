<?php
echo "<b>Suma de los primeros 100 numeros naturales</b><br><br>";
$i = 1;
$suma = 0;
while ( $i <= 100){
	$suma = $suma + $i;
	$i = $i + 1;
}
echo "La suma de los numeros del 1 al 100 es = $suma";
?>