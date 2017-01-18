<?php
$num = (isset($_REQUEST["num"]))?$_REQUEST["num"]:"9";
$i=1;
$j=1;
echo "<table width='90' border='1'>";   

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
