<?php

$pars1 = $_REQUEST["par1"];
$pars2 = $_REQUEST["par2"];
$pars3 = $_REQUEST["par3"];
$pars4 = $_REQUEST["par4"];
$pars5 = $_REQUEST["par5"];
$pars6 = $_REQUEST["par6"];

echo "傳來的參數為: ".$pars1."<br/>";

echo "偷偷傳來的參數為: ".$pars2."<br/>";

echo "TextArea 的值為:".$pars3."<br/>";

echo "Radio 的值為:".$pars4."<br/>";

echo "CheckBox 的值為:".$pars5."<br/>";

echo "Select 的值為:".$pars6."<br/>";

?>