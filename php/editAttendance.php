<?php 
	if(isset($_POST['submitBtn']))
	{
		include 'dbConnect.php';
		$w="";
		$a = $_COOKIE['all'];
		for($i=0; $i<strlen($a); $i++)
		{
			if($a[$i] == '*')
			{
				$d_var = "DELETE FROM hostel_attendance_details WHERE adm_no = $w  AND date_id=".$_POST['date_id'];
				mysql_query($d_var);
				$w="";
			}
			else
				$w .= $a[$i];
		}
		?> <script type="text/javascript"> alert("Records Cleared")</script> <?php
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Edit Attendance - MBCCET Peermade </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/tabStyle.css">
		<link rel="stylesheet" type="text/css" href="../css/divTab.css?v=3">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

		<style type="text/css">
			table, td, tr{
				transition: .5s;
				text-align: center
			}
			.displayTable
			td{
				padding: 10px;
			}
			.displayTable
			th{
				background-color: lightgray;
			}
			.displayTable
			tr{
				box-shadow: 0px 0px 10px 10px white;
			}
		</style>
	</head>
	<body>
		<?php include 'sidebarAdmin.php' ?>

		<input type="text" value="4" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>
		
		<div id="main">
			<div id="selectTab" style="width: 400px; margin: 0px auto; margin-top: 115px">
				<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						Edit Attendance 
					</span>
				</div>

				<div style="color: #666; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;"> 
                    <div class="clear" style="height:50px;">
						<div class="has_lgn_tl" id="has_lgn_1" style="border: none; padding: 0; width: 50%">
	                        <button id="button1" name="head1" style="float: left;  font-weight: bold; width:100%; background-color: darkgrey">
								Student
	                        </button>
						</div>
						
						<div class="has_lgn_tl atv" id="has_lgn_2" style="border:none; padding: 0; width:50%">
							<button id="button2" name="head2" style="float: right; font-weight: bold; width:100%">
								Hostel
	                    	</button>
						</div>
					</div>

					<!-- Search By Hostel Details -->
					<div style="display: block" id="has_lgn_1_x">
						<div style="padding: 20px; padding-left: 35px;"> 
							<center>
								<div style="padding: 10px; margin-bottom: 10px; box-shadow: 0px 1px 0px 0px black">
									<label> Date : </label>
									<input type="date" name="date" class="input" value="<?php echo date('Y-m-d'); ?>">
								</div>
								<div id="adm_div" style="transition: .8s; padding-top: 10px; padding-bottom: 15px; box-shadow: 0 0 15px 3px white inset; border-radius: 25px">
									<table>
										<tr>
											<td colspan="2"> Adm No. : </td>
											<td colspan="4"> 
												<input type="text" id="admno" placeholder="Admission No." style="width: 100%; text-align: center" class="input" autocomplete="off"> 
											</td>
											<td>
												<input type="button" value="Go" class="button" style="width: auto; padding: 5px 15px;border-radius :5px; border: none; margin-left: 15px;" onclick="admGetDetails()">
											</td>
										</tr>
									</table>
								</div>			
								----------------------------------------------------						
								<div id="stud_div" style="transition: .8s; background-color: darkgrey; opacity: .3; padding-top: 20px; box-shadow: 0 0 15px 3px white inset; border-radius: 25px">
									<table>
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
												<input type="text" id="s_name" class="input" placeholder=" Student Name" style="width: 240px; margin-left: 3px; text-align: center" autocomplete="off">
											</td>
										</tr>

	<!-- Scripts -->
<script src="../js/autoComplete.js?v=1"> </script>
<script src="../js/sem.js?v=1"> </script>
<script src="../js/name_Array.js?v=1"> </script>

<script type="text/javascript"> sem(); </script>
									
										<tr>
											<td colspan="5">
												<label style="font-size: .55em"> *Leave Name field empty for Department wise Record </label>
											</td>
											<td align="right">
												<input type="button" value="Go" class="button" style="width:auto; padding:5px 15px;border-radius:5px; border: none" onclick="studGetDetails()"> 
											</td> 
										</tr>
									</table>
								</div>
							</center>
						</div>
					</div>

					<!-- Search By Student Details -->
					<div style="display: none" id="has_lgn_2_x">
						<div style="padding: 20px; padding-left: 35px;"> 
							<center> 
								<div style="padding: 10px; margin-bottom: 10px; box-shadow: 0px 1px 0px 0px black">
									<label> Date : </label>
									<input type="date" id="c_date" class="input" value="<?php echo date('Y-m-d'); ?>">
								</div>
								<div>
									<table style="font-size: 14px">
										<tr>
											<td> Hostel </td>
											<td> : </td>
											<td> 
												<select id="hostelno" class="input" style="width: 100px; margin-left: 3px;" onchange="floor()">
													<option value=""> --select-- </option>
													<option value='1'> HOSTEL 1 </option>
													<option value='2'> HOSTEL 2 </option>
												</select>
											</td>
										</tr>

										<tr id="floor_change"> </tr>
										
										<tr id="room_change"> </tr>

										<tr>
											<td colspan="3" align="right">
												<input type="button" class="button" value="Go" style="width: auto; padding: 5px 15px;border-radius: 5px; border: none" onclick="hostelGetDetails()">
											</td>
										</tr>
									</table>
								</div>
							</center>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div id="get"> </div>
		<footer>
			<p style="color: white">Made with <span style="color: red; font-size: 20px">&#x2764;</span> by the Software Development Cell | MBCCET</p>
		</footer>
	</body>
</html>

<script type="text/javascript">
	var all ="";
	var d;
	window.onload = function()
	{
	    document.getElementById("has_lgn_1").addEventListener('click', 
	    	function()
	    	{
	    		document.getElementById("has_lgn_2_x").style.display = "none";
				document.getElementById("has_lgn_1_x").style.display = "block";
				document.getElementById("button1").style.backgroundColor = "darkgrey";
				document.getElementById("button2").style.backgroundColor = "#F7F7F7";
	    	});

	    document.getElementById("has_lgn_2").addEventListener('click', 
	    	function()
	    	{
	    		document.getElementById("has_lgn_1_x").style.display = "none";
				document.getElementById("has_lgn_2_x").style.display = "block";
				document.getElementById("button2").style.backgroundColor = "darkgrey";
				document.getElementById("button1").style.backgroundColor = "#F7F7F7";
				name_call();
	    	});

	    document.getElementById("adm_div").addEventListener('click', 
	    	function()
		    {
		    	document.getElementById("adm_div").style.opacity = 1;
		    	document.getElementById("adm_div").style.backgroundColor = "white";
		    	document.getElementById("stud_div").style.opacity = .3;
		    	document.getElementById("stud_div").style.backgroundColor = "darkgrey";
		    });

	    document.getElementById("stud_div").addEventListener('click', 
	    	function()
		    {
		    	document.getElementById("adm_div").style.opacity = .3;
		    	document.getElementById("adm_div").style.backgroundColor = "darkgrey";
		    	document.getElementById("stud_div").style.opacity = 1;
		    	document.getElementById("stud_div").style.backgroundColor = "white";
		    });
	}

	var c=0;
	function floor()
	{	
		var target=document.getElementById("floor_change");
		var hostel_code=document.getElementById("hostelno").value;
		var f = "<td> Floor </td> <td> : </td> <td>";
		
		var xhr = new XMLHttpRequest();
		var x="&hostel_code="+hostel_code;
		xhr.open('GET','mbcFloor.php?'+x,true);
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
				target.innerHTML = f+xhr.responseText+"</td>";
		}
		xhr.send(x);
		c=1;
	}

	function room()
	{
		var target=document.getElementById("room_change");
		var hostel=document.getElementById("hostelno").value;
		var floor=document.getElementById("floorno").value;
		var r = "<td> Room </td> <td> : </td> <td>";

		var xhr=new XMLHttpRequest();
		var x="&hostel="+hostel+"&floor="+floor;
		xhr.open('GET','mbcRoom.php?'+x,true);
		
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
				target.innerHTML = r+xhr.responseText+"</td>";
		}
		xhr.send(x);
		c=2;
	}

	var get = document.getElementById('get');

	function admGetDetails()
	{
		var d = document.getElementById('c_date').value; 
		document.cookie = 'date='+d;
		if(document.getElementById('admno').value != "")
		{
			hide_mainDiv();
			var x = '&action=1&admno='+document.getElementById('admno').value+"&date="+d;
			var xhr = new XMLHttpRequest();
			xhr.open('GET','editAttendanceAction.php?'+x,true);
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState==4 && xhr.status==200)
					get.innerHTML = xhr.responseText;
			}
			xhr.send(x);
		}
		else
		{
			alert("Enter Admission No.!");
		}
	}

	function studGetDetails()
	{
		hide_mainDiv();
		var course = document.getElementById('course').value;
		var semester = document.getElementById('semester').value;
		var branch = document.getElementById('branch').value;
		var s_name = document.getElementById('s_name').value;
		var d = document.getElementById('c_date').value; 
		document.cookie = 'date='+d;

		var x = "&course="+course+"&branch="+branch+"&semester="+semester+"&date="+d+"&action=";
		if(document.getElementById('s_name').value == "")
			x += '3';
		else
			x += '2&sname='+s_name;
		var xhr = new XMLHttpRequest();
		xhr.open('GET','editAttendanceAction.php?'+x,true);
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
				get.innerHTML = xhr.responseText;
		}
		xhr.send(x);
	}

	function hostelGetDetails()
	{
		if(document.getElementById('hostelno').value == "")
		{
			alert("Please Select a Hostel");
		}
		else
		{
			hide_mainDiv();
			var hostel = document.getElementById('hostelno').value;
			var d = document.getElementById('c_date').value; 
			document.cookie = 'date='+d;
			var floor=null, room=null;
			if(c >= 1)
				floor = document.getElementById('floorno').value;
			if(c == 2)
				room = document.getElementById('roomno').value;
			var x = "&hostel="+hostel+"&floor="+floor+"&room="+room+"&date="+d+"&action=4";
			var xhr = new XMLHttpRequest();
			xhr.open('GET','editAttendanceAction.php?'+x,true);
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState==4 && xhr.status==200)
					get.innerHTML = xhr.responseText;
			}
			xhr.send(x);
		}
	}

	function hide_mainDiv()
	{
		document.getElementById('main').style.display = "none";
		document.getElementById('get').style.display = "block";
	}
	function show_mainDiv()
	{
		document.getElementById('main').style.display = "block";
		document.getElementById('get').innerHTML = "";
		document.getElementById('get').style.display = "none";
		all = "";
	}

	function markRecord(id,adm)
	{
		if(id.parentNode.parentNode.style.backgroundColor != "rgb(255, 101, 36)")
		{
			all += adm + "*"
			id.parentNode.parentNode.style.backgroundColor = "#FF6524";
			console.log(all);
			document.cookie = 'all='+all;
		}
	}
</script>