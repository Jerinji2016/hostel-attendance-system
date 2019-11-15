<center>
<?php

	include 'dbConnect.php';
	$action = $_GET['action'];

	$var_sql = "SELECT s.name, s.semester, s.branch, s.course, h.remarks, h.entered_by FROM hostel_attendance_details h INNER JOIN hostel_details s ON h.adm_no=s.adm_no WHERE";
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
	if($action == 1 || $action == 2) 
	{
		if($action == 1) 
		{
			$var_sql .= " s.adm_no=".$_GET['adm'];   //Done
			$res = mysql_query($var_sql);
		}
		else 
		{
			$var_sql .= " s.course='BTECH' AND s.semester='S1' AND s.branch='CSE'"; //Add course sem branch
			if(isset($name))
				$var_sql .= " AND s.name='Ajay'";	//Add name
			$res = mysql_query($var_sql);
		}
	}
	else if($action == 3) 
	{	
		$var_sql .= " h.date_id IN (SELECT si_no FROM hostel_date_details WHERE date='2019-04-03')"; //add date
		$res = mysql_query($var_sql);
		echo $var_sql;
	}
	else if($action == 4) 
	{
		$var_sql .= " s.hostel_code=1 AND s.floor_no=1 AND s.room_no=10";	// add hostel details
		$res = mysql_query($var_sql);
		echo $var_sql;
	}
	$i=1;
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>". $i++ ."</td>";
			echo "<td> $row[0] </td>";
			echo "<td> $row[2] <br> $row[1] - $row[3] </td>";
			echo "<td> $row[4] </td>";
			echo "<td> $row[5] </td>";
			echo "</tr>";
	}
?>
	</table>
	<input type="button" value="Close" onclick=" document.getElementById('selectBox').style.display = 'block';
												 document.getElementById('get').style.display = 'none'; ">
</center>