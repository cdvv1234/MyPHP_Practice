<?php

$array = array();

$array["A"] = "sdd";
$array["GG"] = "dioosd";
$array["BB"] = "dadaiokei";
$array["GA"] = "kkesoiw";

foreach( $array as $key => $value )
{
	echo "key is ".$key."  , value is ".$value."<br>";
}
/*
echo "------------------------------<br>";

sort($array);

foreach( $array as $key => $value )
{
	echo "key is ".$key."  , value is ".$value."<br>";
}
*/
/*
echo "------------------------------<br>";
asort($array);

foreach( $array as $key => $value )
{
	echo "key is ".$key."  , value is ".$value."<br>";
}
*/
/*
echo "------------------------------<br>";
rsort($array);

foreach( $array as $key => $value )
{
	echo "key is ".$key."  , value is ".$value."<br>";
}
*/

echo "------------------------------<br>";
arsort($array);

foreach( $array as $key => $value )
{
	echo "key is ".$key."  , value is ".$value."<br>";
}


?>