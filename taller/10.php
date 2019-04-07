<html>
<body>
<h2>Tablas de multiplicar</h2>
<h3>Ingrese un número del 1 al 10 para visualizar la tabla de multiplicar</h3>
<form action="#" method="post">
   <p>Escriba el numero: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar" /></p>
</form>
<?php  
$n=$_POST['num'];
if ($n<1 or $n>10) {
    echo "Escriba un numero entre 1 y 10";
    }
else {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
?>
</body>
</html>
