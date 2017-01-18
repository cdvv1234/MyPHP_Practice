<?php
$a = 100;
$b = 30;
$c = 20;

if ($a < $b) {
	echo "a>b";
	echo "<br/>";
	echo "這個是比較的結果";
}
else if ($b > $c) {
	echo "c < b";
	echo "<br/>";
	echo "這個是比較的結果";
}
else{
	echo "最後";
}

echo "<br/>";

$weekday = 1;

switch ($weekday) {
	case '1':
	case '2':
	case '3':
	case '4':
	case '5':
		echo "工作日";
		break;
	
	default:
		echo "休假日";
		break;
}
?>