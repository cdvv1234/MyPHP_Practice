<?php
/*
Name = Ming
Title = 91作業_乘法表格
*/
$num = (isset($_REQUEST["num"]))?$_REQUEST["num"]:"9";

echo "<table width='90' border='1' cellpadding = '3' >";   


for ($i=1;$i <= $num; $i++) { 
    
    echo "<tr>";
    for ($j=1; $j <= $num ; $j++) { 

         echo "<td>  $i*$j=". $i*$j."  </td>";
        
    }
   
    echo "</tr>";
}

echo "</table>";

?>
