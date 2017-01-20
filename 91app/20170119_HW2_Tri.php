<html>
<head>三角形面積計算</head>
<title>三點面積計算</title>
<form action="20170119_HW2_Tri.php">
X1<input type="text" value="" name="x1"><n/>
Y1<input type="text" value="" name="y1"><n/><br/><br/>
X2<input type="text" value="" name="x2"><n/>
Y2<input type="text" value="" name="y2"><n/><br/><br/>
X3<input type="text" value="" name="x3"><n/>
Y3<input type="text" value="" name="y3"><n/><br/><br/>
<input type="submit" value="計算">
</form>
</html>

<?php

$trix1 = @$_REQUEST["x1"];
$trix2 = @$_REQUEST["x2"];
$trix3 = @$_REQUEST["x3"];
$triy1 = @$_REQUEST["y1"];
$triy2 = @$_REQUEST["y2"];
$triy3 = @$_REQUEST["y3"];

$sum = ($trix1 * $triy2 + $trix2 * $triy3 + $trix3 * $triy1) - ($trix2 * $triy1 + $trix3 * $triy2 + $trix1 * $triy3) ;
echo "三點所形成之三角形計算面積為：".abs($sum/2);

?>