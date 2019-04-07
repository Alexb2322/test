<html>
<body>
<p><form action="#" method="POST"></p>
<table align="center" border="1">
<tr><td><center>Nro.<br><input type="number" name="numero"></center><br>
<center>Visualizacion<br><select name="option" id="">
            
            <option value="1">Ascendente</option>
            <option value="2">Descendente</option>
        </select></center><br>
<center><input type="submit" value="Procesar"></center> 
</tr>
</table>

</form>
<table>
       
</body>
</html>
<?php
$number = $_POST['numero'];
$seleccion = $_POST['option'];
switch ($seleccion) {
    case 1:
    for ($i=1; $i <=$number ; $i++) { 
        if ($i%2==0) {
            echo "<td>".$i."</td>";
        }else {
            echo "<td>".$i."</td>";
        }
    }
        break;
    case 2:
    for ($i=$number; $i >=1 ; $i--) { 
        if ($i%2==0) {
            echo "<td>".$i."</td>";
        }else {
            echo "<td>".$i."</td>";
        }
    }
        break;
    default:
        
        break;
}
echo "</table>";
?>