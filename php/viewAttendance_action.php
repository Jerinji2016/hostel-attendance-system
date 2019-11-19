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
			$var_sql .= " s.adm_no=".$_GET['adm'];
			$res = mysql_query($var_sql);
		}
		else
		{
			$var_sql .= " s.course='".$_GET['course']."' AND s.semester='".$_GET['sem']."' AND s.branch='".$_GET['branch']."'"; 
			if(isset($name))
				$var_sql .= " AND s.name='".$_GET['name']."'";
			$res = mysql_query($var_sql);
		}
	}
	else if($action == 3) 
	{	
		$var_sql .= " h.date_id IN (SELECT si_no FROM hostel_date_details WHERE date='".$_GET['date']."')"; 
		$res = mysql_query($var_sql);
	}
	else if($action == 4) 
	{
		$var_sql .= " s.hostel_code=".$_GET['hostel'];
		if($_GET['floor'] != '')
		{
			echo "here";
			$var_sql .= " AND s.floor_no=".$_GET['floor'];
			if($_GET['room'] != '')
				$var_sql .= " AND s.room_no=".$_GET['room'];
		}
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
	<input type="button" value="Close" onclick="document.getElementById('selectBox').style.display = 'block'; document.getElementById('get').style.display = 'none'; ">
</center>