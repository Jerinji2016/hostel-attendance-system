<?php
	include 'dbConnect.php';
	$course = $_GET['course'];
	$semester = $_GET['semester'];
	$branch = $_GET['branch'];

	include 'dbconnect.php';
	$var_sql = "SELECT name FROM hostel_details WHERE course='$course' AND branch='$branch' AND semester='$semester'";
	$result = mysql_query($var_sql);

	$i = 0;
	while($row=mysql_fetch_array($result))
	{
		$name_array[$i] =  $row[0];
		echo $row[0]."*";
		$i++;
	}

	$myJSON = json_encode($name_array);
?>
