<?php

$my_link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($my_link, "student_test");

$query = "show tables";

$result = mysqli_query($my_link, $query);

$count = mysqli_num_rows($result);

for( $i=0 ; $i < $count ; $i++)
{
	list($table) = mysqli_fetch_row($result);

	echo $table."<br>";
}

mysqli_free_result($result);

mysqli_close($my_link);

?>