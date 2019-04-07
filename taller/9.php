<?php
    echo "<b>Generar 10 numeros aleatorios</b><br><br>";
    $n= 1;   
    $par = 0;
    $impar = 0;
    $parneg=0;
    $imparneg=0;
    
		while($n<=10){
			$rand=rand(-100,100);
			echo $rand."&nbsp;&nbsp;";
			if($rand%2==0){
				if($rand>=0){
				$par++;
				}else{
					$parneg++;
					}				
			}else {
				if($rand>=0){
				$impar++;
				}else{
					$imparneg++;
					}	
			}
			$n++;
		}
          
    echo "<table border ='1'>";
    echo "<tr><td colspan='2'><center>Numeros Generados </center></td></tr>";
    echo "<tr><td>Total de numeros positivos pares </td><td>" .$par."</td></tr>". '<br>';
    echo "<tr><td>Total de numeros positivos impares </td><td>" . $impar."</td></tr>". '<br>';
    echo "<tr><td>Total de numeros negativos pares </td><td>" .$parneg."</td></tr>". '<br>';
    echo "<tr><td>Total de numeros negativos impares </td><td>" . $imparneg."</td></tr>". '<br>';
    echo "</table>";
           
?>