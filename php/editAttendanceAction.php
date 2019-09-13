<!DOCTYPE html>
<html>
	<head>
		<title> Edit Attendance | MBC Hostel Attendance System </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div>
			<center>
				Date : <!-- Ivde pass aayi verunna Date Verum --> 
			</center>
		</div>
	<?php
		$action = $_GET['action'];
		if($action == 1 || $action == 2)
		{
			if($action == 1)
			{
				$var_sql = "";
			}	
			else
			{
				$var_sql = "";
			}
	?>
			<div style="padding: 30px" id="action1">
				<center>
					Action - 1
					<table>
						<td>
							<th> Photo </th>
							<th> Name </th>
							<th> Details </th>
							<th> Remark </th>
							<th> Marked By </th>
							<th> Change to </th>
						</td>
					</table>
				</center>
			</div>
	<?php
		}
		elseif($action == 3)
		{
			$var_sql = "";
	?>
			<div style="padding: 30px" id="action3">
				<center>
					Action - 3
					<table>
						<tr>
							<th> Sl. No </th>
							<th> Name </th>
							<th> Photo </th>
							<th> Details </th>
							<th> Remakrs </th>
							<th> Marked By </th>
							<th> Change to </th>
						</tr>
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
					Action - 4	<br>
				<?php
					if($_GET['hostel'] != null)
					{
						echo $_GET['hostel']." * ";
						if($_GET['floor'] != null) 
						{
							echo $_GET['floor']." _ ";
							if($_GET['room'] != null)
								echo $_GET['room'];	
						}
					}
				?>
					<table>
						<tr>
							<th> Sl No. </th>
							<th> Adm No. </th>
							<th> Name </th>
							<th> Details </th>
							<th> Remark </th>
							<th> Marked By</th>
							<th> Change to </th>
						</tr>
					</table>
				</center>	
			</div>
	<?php
		}
	?>
	</body>
</html>