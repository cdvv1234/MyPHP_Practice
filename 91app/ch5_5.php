<?php
/*
$fp = fopen("text.txt","w+");

fputs($fp,"這是一個測試\r\n");
fputs($fp,"測試第二行!");

fclose($fp);
*/


$fp = fopen ("text.txt", "r+");

while ( !feof($fp))
{
	$line = fgets($fp);
	echo $line."<br/>";
}

fclose($fp);

?>