<?php

$name = "ming";

define("Company", "緯捷科技");

echo "$name";

echo Company;

echo "<br/>";

$data = 1.6;

echo gettype($data);

echo "<br/>";

settype($data, "integer");

echo "$data";

echo "<br/>";
echo "data1:";

//unset($data);
echo isset($data);

?>
