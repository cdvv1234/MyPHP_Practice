<?php

$year = 2009;
$month = 5;
$day = 10;

$return = checkdate($month, $day, $year);

echo $return."<br/>";

$date_str = date("Y/m/d H:i:s");

echo $date_str."<br/>";

$datearr = getdate();

print_r($datearr);

echo "<br/>";
echo $datearr["month"]."<br/>";

$timestamp = mktime(6, 30 , 2009);

$new_date_str = date("Y/m/d ----測試---- H:i:s" , mktime(0, 0,0,6,20,2009));

echo $new_date_str;

?>