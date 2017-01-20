<?php
/*
Name = Ming
Title = 91作業_while_乘法表格
*/
$num = (isset($_REQUEST["num"]))?$_REQUEST["num"]:"9";
$i=1;
$j=1;
echo "<table width='50' border='1' cellpadding = '3'>";   

while($j<= $num){
    $i=1;
    
    echo"<tr>";
    
    while($i<= $num){
        echo "<td>"; 
        echo "$j*$i=".$j*$i;
        echo "</td>";
        $i++;
    };
    
    echo"</tr>";
    $j++;
}

echo "</table>";
?>
