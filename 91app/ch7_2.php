<?php

$ch = curl_init();

//連到中華職棒
curl_setopt($ch, CURLOPT_URL , "www.cpbl.com.tw");

//轉成字串
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$return_str = curl_exec($ch);

echo $return_str;
//echo substr($return_str, 1000,2);
curl_close($ch);
preg_match_all('/ ]*id="news_row_summary"[^>]*>(.*?) <\/div>/si',$return_str,$match); 
print_r($match)
?>