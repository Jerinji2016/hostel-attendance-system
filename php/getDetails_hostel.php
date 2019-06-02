<?php
	$a["hostel_code"] = $_GET['hostelno'];
	$a["floor_no"] = $_GET['floorno'];
	$a["room_no"] = $_GET['roomno'];

	$myDate = $_GET['date'];
	setcookie("dateCookie", $myDate);

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
	}
	th
	{
		padding: 10px;
	}
</style>

<div style="width:900px; margin: 0px auto; margin-top: 40px"> 
	<div style="width: 900px; margin: 0px auto;">
		<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; box-shadow: 0px 0px 15px #666;">
			<span style="color:#09F; font-size: 18px; font-family: Arial Black;">
				Student Info <br>
			</span>
			<div style="color:#DEE3EF">
				<?php
					echo " Date : ".date('d-m-Y',strtotime($myDate));
					if ($a['hostel_code'] != "") 
					{
						echo "&nbsp; &nbsp; &nbsp; &nbsp; Hostel : ".$a['hostel_code'];

						if($a['floor_no'] != "")	
						{
							echo "&nbsp; &nbsp; &nbsp; &nbsp;";
							echo "Floor No : ".$a['floor_no'];
							if($a['room_no'] != "")
							{
								echo "&nbsp; &nbsp; &nbsp; &nbsp;";
								echo "Room No : ".$a['room_no'];
							}
						}					
					}
				?>
			</div>
		</div>
		<form action="../php/attendance_hostel.php" method="POST">
			<center>
				<div style="color: #666; background-color: #F7F7F7; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;"> 
					<table style="width: 100%; text-align: center;" class="beta" border="1">
						<tr style="border: 2px solid black; border-collapse: collapse;">
							<th> Sl No.</th>	
							<th> Room No. </th>	
							<th> Adm No. </th>	
							<th> Name </th>		
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
						$res1 = mysql_query($var_sql);

						$count = 0;

						$row1 = mysql_fetch_array($res1);
						while($row = mysql_fetch_array($res))
						{
							$row1 = mysql_fetch_array($res1);
							$flag = 0;

							unset($name);
							unset($admno);

							$name = array();
							$admno = array();

							$room = $row[0];
							$admno[$count] = $row[1];
							$name[$count] = $row[2];

							while($flag != 1)
							{	
								if($row[0] == $row1[0])
								{
									$count++;
									$admno[$count] = $row1[1];
									$name[$count] = $row1[2];
									$row1 = mysql_fetch_array($res1);
								}
								else
								{
									$flag++;
									$n = $count+1;
									$count = 0;
									for($i=0;$i<$n-1;$i++)
									{
										$row = mysql_fetch_array($res);
									}
								}
							}
					?>
						<tr>
							<!-- SL NO. -->
							<td> 
								<?php 
									for($i=0;$i<$n;$i++)
									{
										echo $sl_no."<br><br>"; 
										$sl_no++; 
									}
								?>
							</td>

							<!-- Room No. -->
							<td> 
								<?php 
									echo $room;
								?>
							</td>
							
							<!-- Admission No. -->
							<td>
								<?php
									for($i=0;$i<$n;$i++)
										echo $admno[$i]."<br><br>";
								?>
							</td>
							
							<!-- Name -->
							<td>
								<?php
									for($i=0;$i<$n;$i++)
										echo $name[$i]."<br><br>";
								?>
							</td>
							
							<!-- Photo -->
							<td> </td>
							
							<!-- Details -->
							<td> 
								<?php
									for($i=0;$i<$n;$i++)
										echo $row[3]." - ".$row[4]."<br><br>";
								?>
							</td>

							<!-- Absent -->
							<td align="left" style="width: 125px">
								<?php
									for($i=0;$i<$n;$i++)
									{
										echo "<input type='checkbox' id='check".$log_count."' name='log[]' value=".$admno[$i]." onchange='drop_appear(".$log_count.")'>";
										include 'option.php';
										$log_count++;
									}

								?>
							</td>

							<!-- Remark Text Box -->
							<td> 
								<?php
									for($i=0;$i<$n;$i++)
										echo "<textarea rows='2' type='text' name='remark".$admno[$i]."' id='remark'></textarea><br>";
								?>
							</td>
						</tr>	

					<?php
						}
					?>
					</table>
				</div>
				<div style="padding: 15px">
					<center> 
						<input type="submit" value="Submit">
						<input type="reset" value="Cancel" onclick="getDetails_hide()">
					</center>
				</div>
			</center>
		</form>
	</div>
</div>

<script type="text/javascript">
	//The function drop_appear() is defined in mbc.php
	//I dont know why im doing this
</script>


