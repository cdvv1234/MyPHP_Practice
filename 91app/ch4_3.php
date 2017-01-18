<?php

$limit = (isset($_REQUEST["li"]))?$_REQUEST["li"]:"100";

$sum = 0;
//迴圈範例
for ($i=1; $i < $limit  ; $i++) 
{
	 $sum += $i;
	 echo "i的值是".$i."----> sum is".$sum;
	 echo "<br/>";
}

echo "執行完畢!<br/>";
echo "總合為".$sum;

?>