
<?php

	echo "<b>Impresion de numeros 1-10 con for</b>";
	echo "<table border ='1'>";
	for($i=1;$i<=10;$i++) //i++ -> i=i+1
	{
		echo "<tr><td>numero: ". $i."</td></tr>";
	}
	echo "</table>";
	
	echo "<b>Impresion de numeros 1-10 con while</b>";
	echo "<table border ='1'>";
	$j=1;
	while($j<=10)
	{
		echo "<tr><td>numero: ". $j."</td></tr>";
		$j = $j+1; //j++;
	}
	echo"</table>";
?>	
	