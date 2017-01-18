<?php
$a = 50;

while ($a < 50) 
{
	echo "A is ".$a;
	echo "<br/>";

	$a ++;
}

echo "done";
echo "<br/>";

$a = 50;

do
{
	echo "A is ".$a;
	echo "<br/>";

	$a ++;
}
while ($a < 50);
echo "done";
?>