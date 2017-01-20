<?php
global $b;

function fc($a)
{
	$a = 100;
	$GLOBALS["b"] = 50;

}

$a = 50;

fc($a);
echo $a;
echo $b;

?>