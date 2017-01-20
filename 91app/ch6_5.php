<?php

$pattern = "/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/";

$num = 100;

$email = "maxfeng@test.com";

echo preg_match($pattern, $email)."<br>";

$str = "a,b,c";

$array = preg_split('/,/', $str);

foreach ($array as $key => $value) 
{
	echo $value."<br>";
	# code...
}

?>