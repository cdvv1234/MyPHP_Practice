<?php

function jet($n)
{
	if($n>1)
	{
	$m = $n - 1;
	echo $m."<br>";
	echo $n."<br>";
	$output = $n * jet($m);
	return $output;
	}
	else
	{
	return 1;
	}
}

$a = jet(3);

echo $a;

?>