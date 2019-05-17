<?php 
	include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> MBC Portal </title>
		<meta name="viewport">

		<link href="../css/login.css" rel="stylesheet" type="text/css">

		<style type="text/css">
			input::placeholder
			{
				color: #ADADAE;
				font-size: 0.8em;
				font-style: italic;
			}
		</style>
	</head>

	<body style="background-color: #FFF;" onbeforeunload="handleBackFunc()">

        <div style="float: right; margin-right: 10px;">  <!--div for logout button-->
            <form action="logout.php" method="post">
            	Logged In As: <b> <?php echo $_SESSION['userid']; ?> &nbsp; </b>
                <button type="submit" value="logout">Logout</button>
            </form>
        </div>
		<div id="main" style="width:1000px; margin: 0px auto; margin-top: 130px; padding: 0px">
			<div style="width: 400px; margin: 0px auto">
				<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						Hostel Attendance System 
					</span>
				</div>

				<div style="color: #666; background-color: #F7F7F7; border-radius: 0px 0px 7px 7px; text-align: left;
							box-shadow: 0px 0px 15px #999;"> 
					<div class="has_lgn_tl" id="has_lgn_1" style="border-left:0;">
						Hostel Details
					</div>
					
					<div class="has_lgn_tl atv" id="has_lgn_2" style="border-right:0;">
						Student Details
					</div>

					<div class="clear" style="height:30px;"></div>

					<!-- Search By Hostel Details -->
					<div style="display: block"; class="has_lgn_tl_x" id="has_lgn_1_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data">
							<div style="padding: 20px; padding-left: 35px;"> 
								<table style="font-size: 14px" align="center">
									<tr height="30">
										<td> Hostel </td>
										<td> : </td>
										<td>
										<select id="hostelno" class="has_sel_fld" style="width: 100px; margin-left: 3px;" onchange="floor()">
												<option value=''>-select-</option>
											    <option value=1>HOSTEL 1</option>
											    <option value=2>HOSTEL 2</option>
											</select> 
										</td> 
									</tr>
									<tr height="30">
										<td> Floor No </td>
										<td> : </td>
										<td>
											<span id="floor_change">
												<select class="has_sel_fld" style="width: 100px; margin-left: 3px;" id="floorno">
													<option value=''>-select-</option>
												</select>
											</span>		
										</td>
									</tr>
									<tr height="30">
										<td> Room No </td>
										<td> : </td>
										<td>
											<span id="room_change">
												<select class="has_sel_fld" style="width: 100px; margin-left: 3px;" id="roomno">
													<option value=''>-select-</option>
												</select>
											</span>
										</td>
									</tr>

									<tr>
										<td> </td>
										<td> </td>
										<td>
											<input type="button" value="Go" class="btn btn-primary" style="width:auto; padding:3px 10px;" onclick="hostelGetDetails()"> 
										</td> 
									</tr>
									<center>
										<?php date_default_timezone_set("Asia/Kolkata"); ?>
										<label> &nbsp; &nbsp; Date : </label> 
										<input type="date" id="myDate" value="<?php echo date('Y-m-d'); ?>">
										<br> <br>
									</center>
								</table>
							</div>
						</form>
					</div>

					<!-- Search By Student Details -->
					<div style="display: none"; class="has_lgn_tl_x" id="has_lgn_2_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data" autocomplete="off" action="">
							<div style="padding: 20px; padding-left: 35px;"> 
								<center>
								<table style="font-size: 14px">
									<tr height="30">
										<td> Course </td>
										<td> : </td>
										<td> 
										<select id="course" class="has_sel_fld" style="width: 100px; margin-left: 3px;" onchange="sem()">
												<option value='BTECH'> B.Tech </option>
												<option value='MTECH'> M.Tech </option>
											</select>
										</td>
										<td> Sem </td>
										<td> : </td>
										<td>
											<span id="sem_change">
												<select id="semester" class="has_sel_fld" style="width: 100px; margin-left: 3px;">
													<option value=''>-select-</option>
												</select>
											</span> 
										</td>
									</tr>

									<tr height="30">
										<td> Branch </td>
										<td> : </td>
										<td colspan="4">
											<select id="branch" class="has_sel_fld" style="width: 240px; margin-left: 3px;" onchange="name_call()">
												<option value="CSE"> Computer Science & Engg. </option>
												<option value="ME">  Mechanical Engg. </option>
												<option value="CE">  Civil Engg. </option>
												<option value="EEE"> Electrical & Electronics Engg. </option>
												<option value="ECE"> Electroniics and Communicatioin Engg. </option>
											</select>
										</td>
									</tr>

									<tr height="30">
										<td> Name </td>
										<td> : </td>
										<td colspan="4">
											<input type="text" id="s_name" placeholder="Student Name" style="width: 240px; margin-left: 3px;">
										</td>
									</tr>
<!-- Scripts -->
<script src="../js/autoCompete.js?v=1"> </script>
<script src="../js/sem.js?v=1"> </script>
<script src="../js/name_Array.js?v=1"> </script>

<script type="text/javascript"> sem(); </script>

									<tr>
										<td></td>
										<td colspan="4"></td>
										<td>
											<input type="button" value="Go" class="btn btn-primary" style="width:auto; padding:3px 10px;" onclick="studGetDetails()"> 
										</td> 
									</tr>
								</table></center>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>

		<div id="getDetails"> </div>
		
	</body>
</html>
		
<script src="../js/getDetails_hostel.js?v=2"> </script>
<script src="../js/getDetails_student.js?v=1"> </script>

<script>
	window.onload = function()
	{
        document.getElementById("has_lgn_1").addEventListener('click', hostel_visible);
        document.getElementById("has_lgn_2").addEventListener('click', stud_visible);
    }

    function handleBackFunc()
    {
    	alert("Back");
    }

	function floor()
	{	
		var target=document.getElementById("floor_change");
		var hostel_code=document.getElementById("hostelno").value;
		
		var xhr = new XMLHttpRequest();
		var x="&hostel_code="+hostel_code;
		xhr.open('GET','mbcFloor.php?'+x,true);
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
			{
				target.innerHTML=xhr.responseText;
			}
		}
		xhr.send(x);
	}

	function room()
	{
		var target=document.getElementById("room_change");
		var hostel=document.getElementById("hostelno").value;
		var floor=document.getElementById("floorno").value;
		
		var xhr=new XMLHttpRequest();
		var x="&hostel="+hostel+"&floor="+floor;
		xhr.open('GET','mbcRoom.php?'+x,true);
		
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
			{
				target.innerHTML=xhr.responseText;
			}
		}
		xhr.send(x);
	}

	function stud_visible()
	{
		document.getElementById("has_lgn_1").className = "has_lgn_tl atv";
		document.getElementById("has_lgn_1_x").style.display = "none";
		
		document.getElementById("has_lgn_2").className = "has_lgn_tl";
		document.getElementById("has_lgn_2_x").style.display = "block";

		name_call();
	}

	function hostel_visible()
	{
		document.getElementById("has_lgn_2").className = "has_lgn_tl atv";
		document.getElementById("has_lgn_2_x").style.display = "none";

		document.getElementById("has_lgn_1").className = "has_lgn_tl";
		document.getElementById("has_lgn_1_x").style.display = "block";
	}

	function drop_appear(id)
	{
		var check_id = document.getElementById("check"+id);
		var drop_id = document.getElementById("drop"+id);
		if(check_id.checked)
		{
			drop_id.style.display = "inline";
		}
		else
		{
			drop_id.style.display = "none";
		}
	}
</script>