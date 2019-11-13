<?php
	include '../php/dbConnect.php';

	$var = "INSERT INTO hostel_date_details(status,";
	$var = $var."date,day_type,remarks,entered_by) VALUES (";

	$day = 1;

	while($day <= 30)
	{
		$var_sql = $var."1,'2019-11-".$day."',1,'----','aditya')";
		mysql_query($var_sql);
		echo $var_sql."<br><br>";
		$day++;
	}
?>