<?php

function test($a,$b)
{
	echo "第一個值是".$a."<br>";
	echo "第二個值是".$b."<br>";
	echo "第一個值的型態為".gettype($a)."<br>";
	echo "第二個值的型態為".gettype($b)."<br>";

	if ($a > $b) 
	{
		echo "第一個值大於第二個值";
		return 100;
		# code...
	}
	else
	{
		echo "第一個值不大於第二個值";
		return 0;
	}
}

$s = 1000;
$d = 1.66;

$sum = test($s,$d);

echo $sum."<br>";

$s1 = 900;
$d1 = "這是一個字串";

$sum2 = test($s1, $d1);

?>