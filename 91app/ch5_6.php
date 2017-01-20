<?php

$a = 12;
$b= -23;

//絕對值
echo abs($a)."<br/>";
echo abs($b)."<br/>";

$c = 2.5;

echo ceil($c)."<br/>";
echo floor($c)."<br/>";
echo round($c)."<br/>";

echo "<br/>";

echo pow(2, 8)."<br/>";

$max = 999;
$min = 1;

echo rand($min, $max)."<br/>";

$e = max($a, $b);
echo $e."<br/>";

$f = min($a, $b);
echo $f."<br/>";

?>