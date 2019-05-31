<?php 
	if(!empty($_POST['course']))
	{
		$adm_no = $_POST['adm_no'];
		$course = $_POST['course'];
		$semester = $_POST['semester'];
		$branch = $_POST['branch'];
		$s_name = $_POST['s_name'];
	}

	if($adm_no != "")
	{
		$var_sql = "SELECT name,course,semester,branch,hostel_code,adm_no,room_no FROM hostel_details where adm_no=".$adm_no;
	}
	else
	{
		$var_sql = "SELECT name,course,semester,branch,hostel_code,adm_no,room_no FROM hostel_details where ";
		$var_sql .= "course='".$course."'";
		$var_sql .= " AND semester='".$semester."'";
		$var_sql .= " AND branch='".$branch."'";
		$var_sql .= " AND name='".$s_name."'";
	}

	include 'dbConnect.php';
	$result = mysql_query($var_sql);

	$row = mysql_fetch_array($result);
	if(!isset($row[0]))
	{
		header("Location: ../login.html");
	}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
		<title>Student Details - Mar Baselios College of Engg And Tech.</title>

		<link href="../css/has.css?v=1" rel="stylesheet" type="text/css" />
		
		<style type="text/css">
			html
			{
				scroll-behavior: smooth;
			}
			body {
			  margin: 0;
			  display: grid;
			  grid-template-columns: min-content 1fr;
			  font-family: system-ui, sans-serif;
			  
			  /* this breaks position sticky in Firefox */
			  /* overflow-x: hidden; */
			}
			nav {
				width : 0px;
				transition-duration: .5s;
			  	white-space: nowrap;
			  	background: #37474F;
			}
			/* TO-DO */
			nav ul {
				display: none;
			  	list-style: none;
			  	transition-delay: 5s;
			 	margin: 0;
			  	padding: 0;
			}
			/* Only stick if you can fit */
			@media (min-height: 300px) {
			  	nav ul {
			    	position: sticky;
			    	top: 0;
			  	}
			}
			nav ul li a {
			  	display: block;
			  	padding: 0.5rem 1rem;
			  	color: white;
			  	text-decoration: none;
			}
			nav ul li a.current {
			  	background: black;
			}
			main {
			  	padding-bottom: 40rem;
			}
			.heading
			{
				color: #CC4200;
				float: left;
				font-weight: 700;
			}
			td
			{
				padding: 5px 10px;
			}
			.rotate90
			{
			    -webkit-transform: rotate(-90deg);
			    -moz-transform: rotate(-90deg);
			    -o-transform: rotate(-90deg);
			    -ms-transform: rotate(-90deg);
			    transform: rotate(-90deg);
			}
			.details
			{
				display:block; 
				padding: 10px 14px; 
				margin: 15px 20px;
				background-color: #eaf6ff;
			}
			.detail_head
			{
				background-color: #eaf6ff; 
				color: #FFFFFF; 
				padding:10px 14px; 
				margin:15px 20px;
			}
		</style>
		<script type="text/javascript">
			var flag = 0;
		</script>
	</head>

	<body style="overflow-y: scroll; background-color: #009ffd;" data-gr-c-s-loaded="false">
		<nav id="navPanel">
		  <ul id="list">
		    <li><a href="#section-1">Student Info</a></li>
		    <li><a href="#section-2">Daily Attendance</a></li>
		    <li><a href="#section-3">Apply Leave</a></li>
		  </ul>
		</nav>

		<main>
			<!-- View Details Page Header -->
			<div id="has_header" style="box-shadow: -1px 1px 15px rgba(0,0,0,.5); width:90%; min-width:1000px; margin:0px auto; background-color: lightblue">
				<div style="float:left; padding:4px 5px; " id="mbc_logo_hldr">
					<div id="navButton" align="left" style="transition: margin-left .5s; float: left">
						<button class="openbtn" onclick="openNav()" style="align">☰ </button>
					</div>
					<img alt="Logo" src="../images/favicon.ico" height="24" /> 
				</div>
				<b>
					<div style="float:left; padding:6px 0px;  font-size:13px;">
						<p style="margin:0;">
							Hostel Management System - Mar Baselios Christian College of Engineering &amp; Technology, Peermade.
						</p>
					</div>
					<a href="logout.php" style="margin-right:5px; cursor:pointer;  color:#FFF; text-decoration:none;">
						<div class="btn" id="klub_lgout" style="float:right; border:1px solid #CCC; margin:2px 3px; border-radius:1px; font-size:13px; padding:5px; width:50px;"> Logout </div>
					</a>
					<div class="klub_h4" style="float:right; padding:7px;"  >
						<!-- Current TimeStamp -->  
					</div>
				</b>
				<div class="clear" style="height:0px;"> </div>
			</div>

			
			<section id="section-1">
			<!-- View Details Page Body -->
			<div id="has_body" style="min-height:600px; width:90%; min-width:1000px; box-shadow: -1px 1px 15px rgba(0, 0, 0, .5); margin:7px auto; background-color: lightblue; padding-bottom: 5px">
				<div style="margin-top: 10px;padding: 5px 5px"></div>
	
					<div class="detail_head"> 
						<div style="margin-left: 5px; float: left" id="click_arrow1"> 
							<img src="../images/arrow.png" id="arrow_img1" alt="arrow" style="width: 20px; height: 20px;">
						</div>
						&nbsp; &nbsp; <label class="heading"> &nbsp; &nbsp;  Student Details </label>
					</div>

					<div id="student_det" class="details">
						<table width="1000">
							<tr>
								<td rowspan="3" style="border: 1px solid black;"> Photo </td>
								
								<td> Name </td>
								<td> : </td>
								<td>
									<?php echo $row[0]; ?>
								</td>
								<td> Course </td>
								<td> : </td>
								<td> 
									<?php echo $row[1]; ?>
								</td>
							</tr>

							<tr>
								<td> Branch </td>
								<td> : </td>
								<td>
									<?php echo $row[2]." - ".$row[3]; ?>
								</td>
								<td> Hostel </td>
								<td> : </td>
								<td>
									<?php echo $row[4]; ?>
								</td>
							</tr>

							<tr>
								<td> Admission No </td>
								<td> : </td>
								<td>
									<?php echo $row[5]; ?>
								</td>
								<td> Room No </td>
								<td> : </td>
								<td>
									<?php echo $row[6]; ?>
								</td>
							</tr>
						</table>
					</div>

				<section id="section-2">
					<div class="detail_head"> 
						<div style="margin-left: 5px; float: left" id="click_arrow3"> 
							<img src="../images/arrow.png" id="arrow_img3" alt="arrow" style="width: 20px; height: 20px;">
						</div>				
						&nbsp; &nbsp; <label class="heading"> &nbsp; &nbsp; Daily Attendance </label>
					</div>

					<?php 
						$year = date("y");
						$sem = $row[2][1];

						$year = "20".$year;

						$year = (int)$year;
						$sem = (int)$sem;

						if(($sem%2) == 0)
						{
							$year = $year - $sem/2;
						}
						else
						{
							$year = $year - ($sem-1)/2;
						}

						$var_sql1 = "SELECT start_date,end_date FROM hostel_academic_details WHERE academic_from = ".$year;
						$result1 = mysql_query($var_sql1);
						$row1 = mysql_fetch_array($result1);

						$start_date = $row1[0];
						$end_date = $row1[1];

						$var_att = "SELECT si_no,status,";
						$var_att .= "date FROM hostel_date_details where date='".$end_date."'";
						$res_att = mysql_query($var_att);
						$row_att = mysql_fetch_array($res_att);

						$var_stu = "SELECT date_id,remarks,entered_by FROM hostel_attendance_details WHERE adm_no=".$row[5]." AND status=1 ORDER BY date_id DESC";
						$res_stu = mysql_query($var_stu);
						$row_stu = mysql_fetch_array($res_stu);

						$flag = 0;
						$si_no = $row_att[0];
					?>

					<!-- Daily Attendance -->
					<div id="daily_attend" class="details">
						<table style="width: 100%; text-align: center; border:2px solid black" border="1">
			
							<tr>
								<th> Date </th>
								<th> Day </th>
								<th> Class / Holiday </th>
								<th> Attendance </th>
								<th> Remark </th>
							</tr>

						<?php 
							while($flag==0)
							{
						?>
							<tr>
						<!-- Date -->
								<td> <?php echo date("d-m-Y",strtotime($row_att[2])); ?> </td>
			
						<!-- Day -->
								<td> 
									<?php 
										echo date('l',strtotime($row_att[2]));
									?>
								</td>

						<!-- Status(H/C) -->
								<td> 
									<?php 
										if($row_att[1] == 1)
											echo "<img src='../images/c.png' alt='Class' style='width: 30px; height: 25px;'>";
										else 
											echo "<img src='../images/x.png' alt='Holiday' style='width: 20px; height: 20px;'>";
									?> 
								</td>

						<!-- Attendance (P/A) -->
								<td> 
									<div>
									<?php
										if((int)$row_stu[0] == $si_no)
										{
											//echo "<b>A</b>";
											echo "<img src='../images/a.png' alt='Absent' style='width: 20px; height: 20px;'>";
											echo "</td> <td>";
						//Remarks
											echo (string)$row_stu[1];
											echo "</td>";
											$row_stu = mysql_fetch_array($res_stu);
										}
										else
										{
											echo "<img src='../images/p.png' alt='Present' style='width: 20px; height: 20px;'>";
											echo "</td> <td>";
											echo "--";;
											echo "</td>"; 
										}
									?>
								</div>
								</td>
							</tr>
						<?php
								$si_no--;
								$var_att = "SELECT si_no,status,";
								$var_att .= "date FROM hostel_date_details WHERE si_no=".$si_no;

								$res_att = mysql_query($var_att);
								$row_att = mysql_fetch_array($res_att);

								if($row_att[2] == $start_date)
									$flag++;
							}
						?>
			
						</table>
					</div>
				</section>
			</div>
		</section>

			<!-- View Details Page Footer -->
			<div id="mbc_footer" style="box-shadow: -1px 1px 15px rgba(0, 0, 0, .5); margin:0px auto; width:90%; min-width:1000px; background-color:rgba(0,0,0,0.8); font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:12px;">
			  	
			  	<div style="float:left; padding:5px; color:#CCC;"> 
			  		© Mar Baselios Christian College of Engineering And Technology. 
			  	</div>
			  	
			  	<div class="clear"></div>
			</div>
	</body>
</html>

<script type="text/javascript">
	
	window.onload = function()
	{
		document.getElementById('click_arrow1').addEventListener('click', divStuDet);
		document.getElementById('click_arrow3').addEventListener('click', divDailyAtnd);
	}

	function divStuDet()
	{	
		console.log("here");
		if(flag != 1)
		{
			document.getElementById('student_det').style.display = 'none';
			flag++;
			document.getElementById('arrow_img1').className = 'rotate90';
		}
		else
		{
			document.getElementById('student_det').style.display = 'block';
			flag--;
			document.getElementById('arrow_img1').classList.remove('rotate90');	
		}
	}

	function divDailyAtnd()
	{	
		if(flag != 1)
		{
			document.getElementById('daily_attend').style.display = 'none';
			flag++;
			document.getElementById('arrow_img3').className = 'rotate90';
		}
		else
		{
			document.getElementById('daily_attend').style.display = 'block';
			flag--;
			document.getElementById('arrow_img3').classList.remove('rotate90');	
		}
	}

	var panelFlag = 0;
	function openNav()
	{
		if(panelFlag == 0)
		{
			document.getElementById("navPanel").style.width = "130px";
			document.getElementById("list").style.display = "block";
			panelFlag++;
		}
		else
			closeNav();
	}

	function closeNav()
	{
		document.getElementById("navPanel").style.width = "0px";
		document.getElementById("list").style.display = "none";
		panelFlag--;
	}

</script>
