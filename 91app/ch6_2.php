<?php

$array = array("aaa", "bbb", "ccc", "ddd", "eee");

echo count($array)."<br>";

list($par1, $par2, $par3, $par4, $par5) = $array;

for ($i = 1; $i <= 5; $i++)
{
	$data = "par".$i;
	echo "par".$i." is ".$$data."<br>";
}

$spar1 = next($array);
$spar2 = next($array);

echo $spar1."<br>";
echo $spar2."<br>";

$spar3 = prev($array);

echo $spar3."<br>";

?>