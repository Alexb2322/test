<?php
$num1=$_POST['n1'];
$num2=$_POST['n2'];
$oper=$_POST['tipo_op'];

echo "<div align=\"center\">Numero 1: ". $num1."<br>";
echo "Numero 2: ". $num2."<br>";
echo "Tipo operacion: " .$oper."<br>";

if($oper=="1")
    $resul=$num1+$num2;
    else
        if($oper=="2")
        $resul=$num1-$num2;
     else
        if($oper=="3")
        $resul=$num1*$num2;
    else
        $resul=$num1/$num2;
echo "Resultado es: " .$resul            
?>