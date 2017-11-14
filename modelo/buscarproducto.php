<?php  
error_reporting(0);
session_start();
require("conexion.php");
$buscar = $_POST['buscar'];
$metodo = $_POST['tipo'];


//se envia la consulta  
$result = mysqli_query($con,"SELECT * FROM `producto` WHERE  
$buscar LIKE '%$metodo%' ORDER BY idproducto ASC");  
//se despliega el resultado  




echo "</tr>";  
while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>$row[1]</td>";  
    echo "<td>$row[2]</td>";  
    echo "<td>$row[3]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    echo "<td>$row[7]</td>";
    echo "<td>$row[8]</td>";
    echo "<td>$row[9]</td>";

    echo "<td><a href='../vista/modificar.php?id=$row[0]'>Modificar</a></td>";
   
    
    ;
        

    echo "</tr>";   
}  
echo "</table>";


mysqli_close($con);
?> 
