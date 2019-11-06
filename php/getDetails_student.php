<?php
	$a["course"] = $_GET['course'];
	$a["semester"] = $_GET['semester'];
	$a["branch"] = $_GET['branch'];
	$a["name"] = $_GET['s_name'];

	$var_sql = "SELECT room_no,adm_no,name,semester,branch FROM hostel_details ";
	$flag = 0;

	foreach($a as $val => $var_value)
	{
		if($a[$val] != "")
		{
			if($flag == 0)
			{
				$var_sql = $var_sql."WHERE ".$val."='".$var_value."' ";
				$flag++;
			}
			else
			{
				$var_sql = $var_sql."AND ".$val."='".$var_value."' ";
			}
		}
	}
	$var_sql = $var_sql."ORDER BY room_no";
?>

<style type="text/css">
	.table
	{
		border: 1px solid black;
		border-collapse: collapse;
	}
	.beta td
	{
		padding: 10px;
		border: 1px solid black;
		border-collapse: collapse;
	}
	th
	{
		padding: 10px;
	}
</style>

<div style="width:1000px; margin: 0px auto; margin-top: 40px; padding: 0px"> 
	<div style="width: 1000px; margin: 0px auto;">
		<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; box-shadow: 0px 0px 15px #666;">
			<span style="color:#09F; font-size: 18px; font-family: Arial Black;">
				Student Info
			</span>
			<div style="color:#DEE3EF">
				<?php
					echo " Course : ".$a['course']."&nbsp; &nbsp; &nbsp; &nbsp;";
					echo " Branch : ".$a['semester']." - ".$a['branch']."&nbsp; &nbsp; &nbsp; &nbsp;";
					if($a['name'] != "")	
						echo "Name : ".$a['name'];
				?>
			</div>
		</div>

		<form action="../php/attendance_student.php" method="POST">
			<center>
				<div style="color: #666; background-color: #F7F7F7; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;"> 
					<table style="width: 100%; text-align: center;" class="beta">
						<tr style="border: 2px solid black; border-collapse: collapse;">
							<th> Sl No. </th>
							<th> Photo </th>
							<th> Details </th>
							<th> Absent </th>
							<th> Remark </th>
						</tr>

						<?php 
							include 'dbConnect.php';

							$sl_no = 1;
							$log_count = 1;

							$res = mysql_query($var_sql);
							while($row = mysql_fetch_array($res))
							{
						?>
						<tr>
							<!-- SL NO -->
							<td> 
								<?php 
									echo $sl_no; $sl_no++;
								?> 
							</td>

							<!-- Photo -->
							<td> </td>

							<!-- Name & Details -->
							<td align="left" style="padding-left: 20px">
								<?php 
									echo "Name         : ".$row[2]."<br>";
									echo "Admission No : ".$row[1]."<br>";
									echo "Course 	   : ".$row[3]." - ".$row[4]."<br>";
									echo "Room No.     : ".$row[0]."<br>";
								?> 
							</td>

							<!-- Absent -->
							<td align="left" style="width: 125px"> 
								<?php
									echo "<input type='checkbox' id='check".$log_count."' name='log[]' value=".$row[1]." onchange='drop_appear(".$log_count.")'>";
									include 'option.php';
								?>
							</td>

							<!-- Remarks -->
							<td> 
								<?php
									echo "<textarea name='remark".$row[1]."' id='remark' placeholder='Remarks'></textarea>";
								?>
							</td>
						</tr>
						<?php 
								$log_count++;
							}	
						?>
					</table>
				</div>
				<div style="padding: 10px">
					<center> 
						<input type="submit" value="Submit"> 
						<input type="reset" value="Cancel" onclick="getDetails_hide()">
					</center>
				</div>
			</center>
		</form>
	</div>
</div>