<?php include 'session.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<title> Mark Attendance </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/tabStyle.css">
	</head>
	<body>
		<?php include 'sidebarAdmin.php' ?>

		<!-- To HighLight in SideBar -->
		<input type="text" value="3" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>
		
		<div id="main" style="margin: 0px auto; margin-top: 15px">
			<div id="selectTab" style="width: 400px; margin: 0px auto; margin-top: 115px">
				<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						Hostel Attendance System 
					</span>
				</div>

				<div style="color: #666; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;"> 
                    <div class="clear" style="height:50px;">
						<div class="has_lgn_tl" id="has_lgn_1" style="border: none; padding: 0; width: 50%">
	                        <button id="button1" name="head1" style="float: left;  font-weight: bold; width:100%; background-color: darkgrey">
								Hostel Details
	                        </button>
						</div>
						
						<div class="has_lgn_tl atv" id="has_lgn_2" style="border:none; padding: 0; width:50%">
							<button id="button2" name="head2" style="float: right; font-weight: bold; width:100%">
								Student Details
	                    	</button>
						</div>
					</div>

					<!-- Search By Hostel Details -->
					<div style="display: block" id="has_lgn_1_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data">
							<div style="padding: 20px; padding-left: 35px;"> 
								<table style="font-size: 14px" align="center">
									<tr height="30">
										<td> Hostel </td>
										<td> : </td>
										<td>
										<select id="hostelno" class="input" style="width: 100px; margin-left: 3px;" onchange="floor()">
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
												<select class="input" id="floorno" style="width: 100px; margin-left: 3px;">
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
												<select class="input" id="roomno" style="width: 100px; margin-left: 3px;" id="roomno">
													<option value=''>-select-</option>
												</select>
											</span>
										</td>
									</tr>

									<tr>
										<td> </td>
										<td> </td>
										<td>
											<input type="button" value="Go" class="button" style="width:auto; padding:5px 15px;border-radius:5px; border: none" onclick="hostelGetDetails()"> 
										</td> 
									</tr>
									<center>
										<?php date_default_timezone_set("Asia/Kolkata"); ?>
										<label> &nbsp; &nbsp; Date : </label> 
										<input class="input" type="date" id="myDate" value="<?php echo date('Y-m-d'); ?>">
										<br> <br>
									</center>
								</table>
							</div>
						</form>
					</div>

					<!-- Search By Student Details -->
					<div style="display: none" id="has_lgn_2_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data" autocomplete="off">
							<div style="padding: 20px; padding-left: 35px;"> 
								<center>
								<table style="font-size: 14px">
									<tr height="30">
										<td> Course </td>
										<td> : </td>
										<td> 
										<select id="course" class="input" style="width: 100px; margin-left: 3px;" onchange="sem()">
												<option value='BTECH'> B.Tech </option>
												<option value='MTECH'> M.Tech </option>
											</select>
										</td>
										<td> Sem </td>
										<td> : </td>
										<td>
											<span id="sem_change">
												<select id="semester" class="input" style="width: 100px; margin-left: 3px;">
													<option value=''>-select-</option>
												</select>
											</span> 
										</td>
									</tr>

									<tr height="30">
										<td> Branch </td>
										<td> : </td>
										<td colspan="4">
											<select id="branch" class="input" style="width: 240px; margin-left: 3px;" onchange="name_call()">
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
											<input type="text" id="s_name" class="input" placeholder=" Student Name" style="width: 240px; margin-left: 3px;">
										</td>
									</tr>

	<!-- Scripts -->
<script src="../js/autoComplete.js?v=1"> </script>
<script src="../js/sem.js?v=1"> </script>
<script src="../js/name_Array.js?v=1"> </script>

<script type="text/javascript"> sem(); </script>
								
									<tr>
										<td></td>
										<td colspan="4"></td>
										<td>
											<input type="button" value="Go" class="button" style="width:auto; padding:5px 15px;border-radius:5px; border: none" onclick="studGetDetails()"> 
										</td> 
									</tr>
								</table></center>
							</div>
						</form>
					</div>	
				</div>
			</div>
			<div id="getDetails"> </div>
		</div>
	</body>
</html>

<script src="../js/getDetails_hostel.js?v=4"> </script>
<script src="../js/getDetails_student.js?v=3"> </script>

<script src="../js/navPanel_actions.js"> </script>

<script type="text/javascript">
	window.onload = function()
	{
	    document.getElementById("has_lgn_1").addEventListener('click', hostel_visible);
	    document.getElementById("has_lgn_2").addEventListener('click', stud_visible);
	}

	function stud_visible()
	{
		document.getElementById("has_lgn_1_x").style.display = "none";
		document.getElementById("has_lgn_2_x").style.display = "block";
		document.getElementById("button2").style.backgroundColor = "darkgrey";
		document.getElementById("button1").style.backgroundColor = "#F7F7F7";


		name_call();
	}

	function hostel_visible()
	{
		document.getElementById("has_lgn_2_x").style.display = "none";
		document.getElementById("has_lgn_1_x").style.display = "block";
		document.getElementById("button1").style.backgroundColor = "darkgrey";
		document.getElementById("button2").style.backgroundColor = "#F7F7F7";
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

	function getDetails_hide()
	{
		document.getElementById("getDetails").innerHTML = "";
		document.getElementById("selectTab").style.display = "block"
		document.getElementById("hostelno").selectedIndex = "";
		document.getElementById("s_name").value = "";
		clearSelect(document.getElementById("floorno"));
		clearSelect(document.getElementById("roomno"));
	}
	function clearSelect(item)
	{
		var i;
		for(i=item.options.length - 1;i>0;i--)
		{
			item.remove(i);
		}
	}

	function hide_HAS()
	{
		document.getElementById("selectTab").style.display = "none";
	}
</script>