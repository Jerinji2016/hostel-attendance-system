<center>
<?php

	include 'dbConnect.php';
	//$action = $_GET['action'];
	$action = 1;

	$var_sql = "SELECT name, semester, branch, course, remarks, marked_by FROM hostel_attendance_details"

	if($action == 1 || $action==2) 
	{
?>
	<table>
		<tr>
			<th>Sl No</th>
			<th>Name</th>
			<th>Details</th>
			<th>Remarks</th>
			<th>Marked By</th>
		</tr>
<?php
		if($action == 1) 
		{

		}
		else 
		{

		}
?>
	</table>
<?php
	}
	else if($action == 3) 
	{
		echo "Date";
	}
	else if($action == 4) 
	{
		echo "Hostel";
	}
?>
</center>