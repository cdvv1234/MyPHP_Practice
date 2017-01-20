<?php 

$link = mysqli_connect("localhost","root","root");

mysqli_select_db($link, "student_test");

$query = "select name, sex, age from student";

$result = mysqli_query($link, $query);

$count = mysqli_num_rows($result);

for ($i= 0; $i < $count ; $i++) 
{ 
	list($name, $sex, $age) = mysqli_fetch_row($result);
	
	switch ($sex) 
	{
		case 1:
			$real_sex = "男";
			# code...
			break;
		case 2:
			$real_sex = "女";
			# code...
			break;

		default:
			$real_sex = "未知的性別";
			# code...
			break;
	}

	echo "姓名:".$name." 性別為:".$real_sex." 年齡為:".$age."<br>\r\n";
	# code...
}

mysqli_free_result($result);

mysqli_close($link);

?>