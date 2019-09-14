<!DOCTYPE html>
<html>
	<head>
		<title> Edit Attendance | MBC Hostel Attendance System </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div>
			<center>
				Date : <?php echo date('d-m-Y',strtotime($_GET['date'])) ?> 
				<?php 
					include 'dbConnect.php';
					$var = "SELECT si_no, status FROM hostel_date_details WHERE  "."date = '".$_GET['date']."'";
					$res = mysql_query($var);
					$date_id = mysql_fetch_array($res);
				?>
			</center>
		</div>
	<?php
		$action = $_GET['action'];
		if($action == 1 || $action == 2)
		{
	?>
			<div style="padding: 30px" id="action1">
				<center>
					<table class="displayTable">
						<tr>
							<th> Photo </th>
							<th> Name </th>
							<th> Details </th>
							<th> Remark </th>
							<th> Marked By </th>
							<th> Delete </th>
						</tr>
	<?php
			if($action == 1)
			{
				$var_sql = "SELECT s.name,a.adm_no,s.course,s.branch,s.semester,a.remarks,a.entered_by FROM hostel_details s INNER JOIN hostel_attendance_details a ON s.adm_no=a.adm_no WHERE a.date_id=".$date_id[0]." AND a.adm_no=".$_GET['admno'];
				$result = mysql_query($var_sql);
				while($row=mysql_fetch_array($result)) 
				{
					echo "<tr>";
						echo "<td> </td>";
						echo "<td> 
								$row[0]<br> 
								<label style='font-size: .7em'>
									$row[1] 
								</label>
							</td>";
						echo "<td> 
								$row[2]<br> 
								<label style='font-size: .7em'>
									 $row[3] - $row[4] 
								</label>
							</td>";
						echo "<td> $row[5] </td>";
						echo "<td> $row[6] </td>";
					?>
							<td> 
								<input type="button" value="X" style="background-color: red" onclick="markRecord(this,<?php echo $row[1] ?>)">
							</td>
					<?php
					echo "</tr>"; 
				}
			}	
			else
			{
				$course=$_GET['course']; $sem=$_GET['semester']; $branch=$_GET['branch']; $name=$_GET['sname'];
				$var_sql = "SELECT s.name,a.adm_no,a.remarks,a.entered_by FROM hostel_details s INNER JOIN hostel_attendance_details a ON s.adm_no=a.adm_no WHERE s.course='$course' AND s.branch='$branch' AND s.semester='$sem' AND s.name='$name' AND a.date_id=".$date_id[0];
				$result = mysql_query($var_sql);
				while($row=mysql_fetch_array($result)) 
				{
					echo "<tr>";
						echo "<td> </td>";
						echo "<td> 
								$row[0]<br> 
								<label style='font-size: .7em'>
									$row[1] 
								</label>
							</td>";
						echo "<td> 
								$course <br> 
								<label style='font-size: .7em'>
									 $branch - $sem 
								</label>
							</td>";
						echo "<td> $row[2] </td>";
						echo "<td> $row[3] </td>";
	?>
							<td>
								<input type="button" value="X" style="background-color: red" onclick="markRecord(this,<?php echo $row[1] ?>)">
							</td>
	<?php
					echo "</tr>"; 
				}
			}
	?>
					</table>
				</center>
			</div>
	<?php
		}
		elseif($action == 3)
		{
			$course=$_GET['course']; $sem=$_GET['semester']; $branch=$_GET['branch'];
			$var_sql = "SELECT s.name,a.adm_no,a.remarks,a.entered_by FROM hostel_details s INNER JOIN hostel_attendance_details a ON s.adm_no=a.adm_no WHERE s.course='$course' AND s.branch='$branch' AND s.semester='$sem' AND a.date_id=".$date_id[0];
	?>
			<div style="padding: 30px" id="action3">
				<center>
					<table class="displayTable">
						<tr>
							<th> Sl. No </th>
							<th> Name </th>
							<th> Photo </th>
							<th> Details </th>
							<th> Remark </th>
							<th> Marked By </th>
							<th> Delete </th>
						</tr>
	<?php 
				$result = mysql_query($var_sql);
				$i=1;
				while($row=mysql_fetch_array($result)) 
				{
					echo "<tr>";
						echo "<td> ".$i++." </td>";
						echo "<td> 
								$row[0]<br> 
								<label style='font-size: .7em'>
									$row[1] 
								</label>
							</td>";
						echo "<td> </td>";
						echo "<td> 
								$course <br> 
								<label style='font-size: .7em'>
									 $branch - $sem 
								</label>
							</td>";
						echo "<td> $row[2] </td>";
						echo "<td> $row[3] </td>";
	?>
							<td>
								<input type="button" value="X" style="background-color: red" onclick="markRecord(this,<?php echo $row[1] ?>)">
							</td>
	<?php
					echo "</tr>"; 
				}
	?>
					</table>
				</center>
			</div>
	<?php
		}
		elseif($action == 4)
		{
			$var_sql = "";
	?>
			<div style="padding: 30px" id="action4">
				<center>	
					<table class="displayTable">
						<tr>
							<th> Sl No. </th>
							<th> Adm No. </th>
							<th> Name </th>
							<th> Details </th>
							<th> Remark </th>
							<th> Marked By</th>
							<th> Delete </th>
						</tr>
	<?php
			$hostel=$_GET['hostel'];
			$var_sql = "SELECT a.adm_no,s.name,s.course,s.branch,s.semester,a.remarks,a.entered_by FROM hostel_details s INNER JOIN hostel_attendance_details a ON s.adm_no=a.adm_no WHERE s.hostel_code=$hostel AND a.date_id=".$date_id[0];

			if($_GET['floor'] != null) 
			{
				$floor=$_GET['floor'];
				$var_sql .= " AND s.floor_no=$floor";
				if($_GET['room'] != null)
				{
					$room=$_GET['room'];
					$var_sql .= " AND s.room_no=$room";	
				}
			}
			$result = mysql_query($var_sql);
			$i=1;
			while($row=mysql_fetch_array($result)) 
			{
				echo "<tr>";
					echo "<td> ".$i++." </td>";
					echo "<td> $row[0]	</td>";
					echo "<td> $row[1] </td>";
					echo "<td> 
							$row[2] <br> 
							<label style='font-size: .7em'>
								 $row[3] - $row[4] 
							</label>
						</td>";
					echo "<td> $row[5] </td>";
					echo "<td> $row[6] </td>";
	?>
					<td>
						<input type="button" value="X" style="background-color: red" onclick="markRecord(this,<?php echo $row[0] ?>)">
					</td>
	<?php
				echo "</tr>"; 
			}
	?>
					</table>
				</center>	
			</div>
	<?php
		}
	?>
		<center>
			<form action="" method="POST">
				<div>
					<input type="hidden" name="date_id" value=<?php echo $date_id[0] ?> >	
					<input type="submit" name="submitBtn" value="Go" class="button_go">
					<input type="button" name="cancel" value="Cancel" class="button_go" onclick="show_mainDiv()">
				</div>
			</form>
		</center>
	</body>
</html>