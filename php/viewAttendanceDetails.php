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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Student Details - Mar Baselios College of Engg And Tech.</title>

		<link href="../css/has.css?v=1" rel="stylesheet" type="text/css" />
		<link href="../css/has_thm.css?v=1" rel="stylesheet" type="text/css" />
		<link href="../css/has_vd.css?v=1" rel="stylesheet" type="text/css" />
		
		<style type="text/css">
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
				background-color: #B8E4FC;
			}
			.detail_head
			{
				background-color: #98ADB7; 
				color: #FFFFFF; 
				padding:10px 14px; 
				margin:15px 20px;
			}
		</style>
		<script type="text/javascript">
			var flag = 0;
		</script>
	</head>

	<body style="overflow-y: scroll;" data-gr-c-s-loaded="false">
		<!-- View Details Page Header -->
		<div id="has_header" style="box-shadow: -1px 1px 15px rgba(0,0,0,.5); width:90%; min-width:1000px; margin:0px auto; background-color: #80d4ff">
			<div style="float:left; padding:4px 5px; " id="mbc_logo_hldr"><img alt="Logo" src="../images/favicon.ico" height="24" /> </div>
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

		<!-- View Details Page Body -->
		<div id="has_body" style="min-height:600px; width:90%; min-width:1000px; box-shadow: -1px 1px 15px rgba(0, 0, 0, .5); margin:7px auto; background-color: #80d4ff">
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
						<td rowspan="3" style="border: 1px solid black;"> P </td>
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

			<div class="detail_head"> 
				<div style="margin-left: 5px; float: left" id="click_arrow2"> 
					<img src="../images/arrow.png" id="arrow_img2" alt="arrow" style="width: 20px; height: 20px;">
				</div>
				&nbsp; &nbsp; <label class="heading"> &nbsp; &nbsp; Overall Attendance </label>
			</div>

			<div id="overall_attend" class="details">
				<!-- Overall Attendance -->
				Overall Attendance
			</div>

			<div class="detail_head"> 
				<div style="margin-left: 5px; float: left" id="click_arrow3"> 
					<img src="../images/arrow.png" id="arrow_img3" alt="arrow" style="width: 20px; height: 20px;">
				</div>				
				&nbsp; &nbsp; <label class="heading"> &nbsp; &nbsp; Daily Attendance </label>
			</div>

			<div id="daily_attend" class="details">
				<!-- Daily Attendance -->
				Daily Attendance
			</div>
		</div>

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
		document.getElementById('click_arrow2').addEventListener('click', divAllAtnd);
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

	function divAllAtnd()
	{	
		console.log("here");
		if(flag != 1)
		{
			document.getElementById('overall_attend').style.display = 'none';
			flag++;
			document.getElementById('arrow_img2').className = 'rotate90';
		}
		else
		{
			document.getElementById('overall_attend').style.display = 'block';
			flag--;
			document.getElementById('arrow_img2').classList.remove('rotate90');	
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

</script>