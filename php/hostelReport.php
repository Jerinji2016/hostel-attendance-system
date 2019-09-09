<?php
	include 'session.php';
	include 'dbConnect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Hostel Reports </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/divTab.css?v=3">

		<style type="text/css">
			td{
				padding: 10px;
			}
		</style>
	</head>

	<body>
		<?php include 'sidebarAdmin.php' ?>
		
		<!-- To HighLight in SideBar -->
		<input type="text" value="6" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>
		<div id="main">
			<div style="margin-top: 50px;">
				<center>
					<form action="" method="post">
						<input type="month" class="input" name="month" id="month" value="<?php echo date('Y-m'); ?>">
						<input type="submit" name="submitButton" value="GO" class="button_go">
					</form>
				</center>
			</div>
			<div class="main_form" style="width: 750px; margin: 0px auto; margin-top: 4%">
				<div style="border-radius: 25px 25px 0px 0px; padding: 15px 20px; background-color: #0C0C0C;
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						<div id="head" style="text-align: center; font-family: 'Open Sans'; font-weight: bold"> Student Reports </div>
					</span>
				</div>
				
				<div class="FormDispArea">
					<?php
						$m = $_POST['month'];
						if($m=="")
						{
							$m=date('Y-m');
						}
						$var_sql = "SELECT * FROM report_student WHERE MONTH("."date)=".date('m',strtotime($m))." AND YEAR(date)=".date('Y',strtotime($m));
						$res = mysql_query($var_sql);
					?>
					<div id="div_1" style="clear:both; padding: 20px" class="has_lgn_tl_x">
						<center>
							<table style="width: auto; text-align: center">
								<tr>
									<th>Sl. No.</th>
									<th>Date</th>
									<th>Name</th>
									<th>Course</th>
									<th>Report Details</th>
									<th>Reported By</th>
								</tr>
						<?php 
							$i=1;
							while($row = mysql_fetch_array($res))
							{
								if($row[5]==1)
									echo "<tr style='background-color: lightgrey; color: solid black'>";
								else
									echo "<tr style='background-color: white'>";	
									echo "<td>";
										echo $i;   																				//1. Sl No.
									echo "</td>";
									echo "<td>";
										echo $row[8];																			//2. Date
									echo "</td>";
									echo "<td>";
										echo $row[1];																			//3. Name
									echo "</td>";
									echo "<td>";
										echo $row[2]."<br>";																	//4. Course
										echo $row[4]." - ".$row[3];
									echo "</td>";
									echo "<td>";
										echo $row[6];																			//5. Report Details
									echo "</td>";
									echo "<td>";
										echo $row[7];																			//6. Reported By
									echo "</td>";	
									if($row[5]==1)
									{
										echo "<td>";
											echo "<input type='hidden' name='count' value=".count($row).">";
											echo "<input type='submit' class='button_go' value='Mark Read'>";		//7. Read
										echo "</td>";	
									}
									else
									{
										echo "<td>";
											echo "<label style='color: green'> Checked </label>";
										echo "</td>";
									}
								echo "</tr>";
								$i++;
							}
						?>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>