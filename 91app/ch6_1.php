<?php

$array = array();

$array[1] = "aaa";
$array[3] = "bbb";
$array[5] = "ccc";
$array[7] = "ddd";
$array[12] = "eee";

foreach ($array as $key => $value) 
{
	echo "Key is ".$key." and Value is ".$value."<br>";
	# code...
}

$array1 = array("中文", "英文", "自然", "社會", "體育");

$i = 0;
while ( $i < count($array1)) 
{	
	echo "array value is ".$array1[$i]."<br>";
	$i++;
	# code...
}

?>