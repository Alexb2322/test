

<?php

echo "<table border ='1'>";
for($i=1;$i<=10;$i++)
{
  if($i%2==0){

	echo"<tr><td bgcolor='YELLOW'>".$i."</td></tr>";
  }else{
	echo"<tr><td bgcolor='GREEN'>".$i."</td></tr>";
  }
  }

echo "</table>";

echo"<hr>";

echo "<table border ='1'><tr>";
for($i=1;$i<=10;$i++)
{
  if($i%2==0){

	echo"<td bgcolor='YELLOW'>".$i."</td>";
  }else{
	echo"<td bgcolor='GREEN'>".$i."</td>";
  }
  }

echo "</tr></table>";



?>