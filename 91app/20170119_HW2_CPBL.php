<!DOCTYPE html>
<html>
<head>
	<title>擷取CPBL新聞</title>
</head>
<body bgcolor="#CCCCFF">

<?php

$ch = curl_init();

//連到中華職棒
curl_setopt($ch, CURLOPT_URL , "www.cpbl.com.tw/news/lists.html");

//轉成字串
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$return_str = curl_exec($ch);

//echo $return_str;
//echo substr($return_str, 1000,2);

$head1 = '/<div class=\"news_head_title(.*?)<\/div>/s';
$head2 = '/<div class=\"news_head_summary(.*?)<\/div>/s';
$divs = '/<div class=\"news_row_cont(.*?)<\/a>/s';
$links = '/<a href(.*)more<\/a>/iU';
preg_match_all($divs, $return_str, $div1);
preg_match_all($links,$return_str,$wmatch);
preg_match_all('/<div[^>]*class="news_row_summary"[^>]*>(.+?)<a/',$return_str,$match); 
preg_match_all($head1, $return_str, $ht1);
preg_match_all($head2, $return_str, $hs1);

//print_r($match);
//print_r($wmatch);
//print_r($div1);
//print_r($ht1);
//print_r($hs1);

curl_close($ch);
echo "<table border='1' cellpadding = '3'>";

$headgo = "http://www.cpbl.com.tw/".substr($hs1[1][0], 32, 56);
echo "<th>".substr($ht1[1][0], 160,60)."<br/>".substr($hs1[1][0], 92,300)."<a href ='$headgo'>連結</a></th>";


for ($i=0; $i <count($match[1]) ; $i++) 
{ 
	$hgo = "http://www.cpbl.com.tw".substr($wmatch[1][$i], 2 , 61);
	echo "<tr>";
	echo "<td>";
	echo "<b>".substr($div1[1][$i],81,63)."</b>"."<br/>";
	echo $match[1][$i]."</br>";
	echo "<a href ='$hgo'>連結</a>";
	echo "</td>";
	echo "</tr>";
	# code...
}

echo "</table>";

?>

</body></html>
