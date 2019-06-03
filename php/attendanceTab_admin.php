<?php 
	include 'session.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			View Attendance Details
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<style>
			#viewByStudent,#viewByDate,#viewByHostel{
				transition: transform .2s;
				border: none;
				width: 133px;
				height: 50px;
			}
			#viewByStudent:hover,#viewByDate:hover,#viewByHostel:hover{
				transform: scale(1.1);
				background-color: darkgray;
			}
			.SelectorHead{
				color: #666; background-color: #F7F7F7; border-radius: 0px 0px 25px 25px; text-align: center; box-shadow: 0px 0px 15px #999;
			}
		</style>
	</head>
	<body>
		<input type="text" value="2" id="display" style="display: none">
		<?php include 'sidebar.php' ?>
		<script type="text/javascript"> focusSidebar(); </script>
		
		<div id="main" style="width: 1000px; margin: 0px auto; margin-top: 130px; padding: 0%">
			<div style="width: 400px; margin: 0px auto">
				<div style="border-radius: 25px 25px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						<div id="head"> View Attendance Records </div>
					</span>
				</div>

				<div class="SelectorHead">
					<div style="border-left: 1px; display: inline; font-weight: bold">
						<button id="viewByStudent" name="head1" value="head1" style="float: left; background-color: darkgray">Student</button>   
					</div>
					
					<div style="border-right:0; display: inline;">
						<button id="viewByDate" name="head2" value="head2" style="float: center">Date</button>   
					</div>

					<div style="display: inline">
						<button id="viewByHostel" name="head3" value="head3" style="float: right">Hostel</button>   
					</div>

					<!-- Division - 1 -->
					<div id="div_1" style="clear:both; padding: 20px"; class="has_lgn_tl_x">
						<center>
							<form action="" method="post">
								<div style="width: auto">
									Adm No : 
									<input type="text" required>
									<input type="submit" value="GO">
								</div>
							</form>
								<div>
									========== OR ===========
								</div>
							<form method="post" action="">
								<div style="width: auto">
									<table> 
										<tr>
											<td> Course </td>
											<td> : </td>
											<td> 
												<select id="course" name="course" onchange="sem()" style="width: 100px; margin-left: 3px;">
													<option value='BTECH'> B.TECH </option>
													<option value='MTECH'> M.TECH </option>
												</select>
											</td>
											<td> - </td>
											<td> 
												<span id="sem_change">
													<select id="semester" name="semester" class="has_sel_fld" style="width: 100px">
														<option value=''>-select-</option>
													</select>
												</span> 
											</td>
										</tr>
										<tr>
											<td> Branch </td>
											<td> : </td>
											<td colspan="3"> 
												<select id="branch" name="branch" style="width: 240px; margin-left: 3px;" onchange="name_call()">
													<option value="CSE"> Computer Science & Engg. </option>
													<option value="ME">  Mechanical Engg. </option>
													<option value="CE">  Civil Engg. </option>
													<option value="EEE"> Electrical & Electronics Engg. </option>
													<option value="ECE"> Electroniics and Communicatioin Engg. </option>
												</select>
											</td>
										</tr>
										<tr> 
											<td> Name </td>
											<td> : </td>
											<td colspan="3">
												<input type="text" id="s_name" name="s_name" placeholder="Student Name" required>
											</td>
										</tr>
										<tr>
											<td align="right" colspan="right">
												<input type="submit" value="GO">
											</td>
										</tr>
		<script type="text/javascript" src="../js/sem.js"></script>
		<script type="text/javascript" src="../js/name_Array.js?v=1"></script>
		<script type="text/javascript" src="../js/autoComplete.js"></script>
		
		<script type="text/javascript"> sem(); </script>
									</table>
								</div>
							</form>
						</center>
					</div>

					<!-- Division - 2 -->
					<div id="div_2" style="clear:both; display: none"; class="has_lgn_tl_x">
						<center>
							Division-2
						</center>
					</div>

					<!-- Division - 3 -->
					<div id="div_3" style="clear:both; display: none"; class="has_lgn_tl_x">
						<center>
							Division-3
						</center>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
	window.onload = function()
	{
		document.getElementById("viewByStudent").addEventListener('click', viewByStudent);
		document.getElementById("viewByDate").addEventListener('click', viewByDate);
		document.getElementById("viewByHostel").addEventListener('click', viewByHostel);
	}
	function nameNeedFalse()
	{
		if(document.getElementById('adm_no').value != "")
		{
			document.getElementById('s_name').required = false;
		}
		else
		{
			document.getElementById('s_name').required = true;
		}
	}

	function admNeedFalse()
	{	
		if(document.getElementById('s_name').value != "")
		{
			document.getElementById('adm_no').required = false;
		}
		else
		{
			document.getElementById('adm_no').required = true;
		}
	}

	function viewByStudent()
	{
		document.getElementById('div_2').style.display = "none";
		document.getElementById('div_3').style.display = "none";
		document.getElementById('div_1').style.display = "block";
		document.getElementById('viewByStudent').style.backgroundColor="darkgray";
		document.getElementById('viewByDate').style.backgroundColor="lightgray";
		document.getElementById('viewByHostel').style.backgroundColor="lightgray";

		document.getElementById('viewByStudent').style.fontWeight ="bold";
		document.getElementById('viewByDate').style.fontWeight ="normal";
		document.getElementById('viewByHostel').style.fontWeight ="normal";
		console.log("here1");
	}

	function viewByDate()
	{
		document.getElementById('div_1').style.display = "none";
		document.getElementById('div_3').style.display = "none";
		document.getElementById('div_2').style.display = "block";
		document.getElementById('viewByDate').style.backgroundColor="darkgray";
		document.getElementById('viewByStudent').style.backgroundColor="lightgray";
		document.getElementById('viewByHostel').style.backgroundColor="lightgray";

		document.getElementById('viewByDate').style.fontWeight ="bold";
		document.getElementById('viewByStudent').style.fontWeight ="normal";
		document.getElementById('viewByHostel').style.fontWeight ="normal";

		console.log("not here 1");
	}

	function viewByHostel()
	{
		document.getElementById('div_1').style.display = "none";
		document.getElementById('div_2').style.display = "none";
		document.getElementById('div_3').style.display = "block";
		document.getElementById('viewByHostel').style.backgroundColor="darkgray";
		document.getElementById('viewByStudent').style.backgroundColor="lightgray";
		document.getElementById('viewByDate').style.backgroundColor="lightgray";

		document.getElementById('viewByHostel').style.fontWeight ="bold";
		document.getElementById('viewByStudent').style.fontWeight ="normal";
		document.getElementById('viewByDate').style.fontWeight ="normal";
		console.log("here3");
	}
</script>