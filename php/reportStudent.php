<?php
	include 'session.php';
	if(isset($_POST['SubmitButton']))
	{
		$course = $_POST['course'];
		$semester = $_POST['semester'];
		$branch = $_POST['branch'];
		$name = $_POST['s_name'];
		$report = $_POST['report'];
		$d = "date";

		include 'dbConnect.php';
		session_start();

		$name_fetch = "SELECT adm_no FROM hostel_details WHERE name='$name' AND course='$course' AND branch='$branch' AND semester='$semester'";
		$res = mysql_query($name_fetch);
		$row = mysql_fetch_array($res);

		$var_sql = "INSERT INTO report_student(name,course,semester,branch,report,".$d.",status,incharge,adm_no) VALUES('".$name."','".$course."','".$semester."','".$branch."','".$report."','".date('Y-m-d')."',1,'".$_SESSION['u_name']."',$row[0])"; 
		echo $var_sql;

		if(mysql_query($var_sql))
		{
			?> 
			<script type="text/javascript">
				alert("Reported!");
			</script>
			<?php
		}
		else
		{
			?> 
			<script type="text/javascript">
				alert("Report Failed");
			</script>
			<?php
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Report a Student </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/divTab.css?v=3">
		<link rel="stylesheet" type="text/css" href="../css/autocomplete.css">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	</head>

	<body>
		<input type="text" value="4" id="display" style="display: none"> <!--FOR SIDEBAR BUTTON-->
		<?php include 'sidebar.php' ?>
		<script type="text/javascript"> focusSidebar(); </script>

		<div id="main">
			<div class="main_form" style="width: 500px; margin: 0px auto; margin-top: 7%">
				<div style="border-radius: 25px 25px 0px 0px; padding: 15px 20px; background-color: #0C0C0C;
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						<div id="head" style="text-align: center; font-family: 'Open Sans'; font-weight: bold"> Report A Student </div>
					</span>
				</div>

				<div class="FormDispArea">
					<div id="div_1" style="clear:both; padding: 20px" class="has_lgn_tl_x">
						<center>
							<form method="POST" action="">
								<div style="width: auto">
									<table>
										<tr>
											<td><p> Course </p></td>
											<td><p> : </p></td>
											<td>
												<select class="input" id="course" name="course" onchange="sem()" style="width: 100px; height: 32px">
													<option value='BTECH'> B.Tech </option>
													<option value='MTECH'> M.Tech </option>
												</select>
											</td>
											<td><p> &amp; </p></td>
											<td>
												<span id="sem_change" style="float: right">
													<select class="input" id="semester" name="semester" class="has_sel_fld">
														<option class="input" value="">-select-</option>
													</select>
												</span>
											</td>
										</tr>
										<tr>
											<td><p> Branch </p></td>
											<td><p> : </p></td>
											<td colspan="3">
												<select class="input" id="branch" name="branch" style="width: 100%; height: 32px" onchange="name_call()">
													<option value="CSE"> Computer Science & Engg. </option>
													<option value="ME">  Mechanical Engg. </option>
													<option value="CE">  Civil Engg. </option>
													<option value="EEE"> Electrical & Electronics Engg. </option>
													<option value="ECE"> Electroniics and Communicatioin Engg. </option>
												</select>
											</td>
										</tr>
										<tr>
											<td><p> Name </p></td>
											<td><p> : </p></td>
											<td colspan="3">
												<input class="input" type="text" id="s_name" name="s_name" placeholder=" Student Name" required style="width: 99%" autocomplete="off">
											</td>
										</tr>
										<tr>
											<td><p> Report </p></td>
											<td><p> : </p></td>
											<td colspan="3">
												<textarea rows="3" class="report" id="report" name="report" placeholder="Report Details" required="on"></textarea>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td align="right" colspan="right">
												<input class="button_go" name="SubmitButton" type="submit" value="GO">
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
				</div>
			</div>

			<footer>
				<p style="color: white">Made with <span style="color: red; font-size: 20px">&#x2764;</span> by the Software Development Cell | MBCCET</p>
			</footer>
		</div>
	</body>
</html>
