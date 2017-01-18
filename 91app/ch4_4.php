<?php
$a = 0;
$sum = 0;

while ( $a < 100) 
{
	echo "$"."a 的值為".$a;
	echo "<br/>";

	$sum += $a;
	$a++;

	if ($sum > 100) 
	{
		break;
		//continue;
		# code...
	}

	echo "done";
	echo "<br/>";
}
?>