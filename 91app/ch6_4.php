<?php

$a = " this is a test !!! ";
$b = substr($a, 8, 2);

echo "A 的值為 ".$a."<br>";
echo "B 的值為 ".$b."<br>";

$c = trim( $a);

echo "a的值為:".$a.":<br>\r\n";
echo "c的值為:".$c.":<br>\r\n";

$a_len = strlen($a);
$c_len = strlen($c);

echo "a的長度為".$a_len."<br>\r\n";
echo "c的長度為".$c_len."<br>\r\n";

$data = sprintf(" 字串資料為 %s <br> trim之後的字串為:", $a, $c);

echo $data;

echo ord('a')."<br>";
echo chr(68)."<br>";

echo strrpos($a, "s");

?>