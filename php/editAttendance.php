<!DOCTYPE html>
<html>
	<head>
		<title> Edit Attendance - MBCCET Peermade </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/tabStyle.css">
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
								Department
	                    	</button>
						</div>
					</div>

					<!-- Search By Hostel Details -->
					<div style="display: block" id="has_lgn_1_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data">
							<div style="padding: 20px; padding-left: 35px;"> 
								<center>
									<table>
										<tr>
											<td colspan="2"> Adm No. : </td>
											<td colspan="4"> <input type="text" id="admno" placeholder="Admission No." style="width: 100%; text-align: center" class="input"> </td>
										</tr>
										<tr>
											<td colspan="6" style="text-align: center;"> ========= OR ======== </td>
										</tr>
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
												<input type="text" id="s_name" class="input" placeholder=" Student Name" style="width: 240px; margin-left: 3px; text-align: center">
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
												<input type="button" value="Go" class="button" style="width:auto; padding:5px 15px;border-radius:5px; border: none" onclick="studDetails()"> 
											</td> 
										</tr>
									</table>
								</center>
							</div>
						</form>
					</div>

					<!-- Search By Student Details -->
					<div style="display: none" id="has_lgn_2_x">
						<form id="hostel_form" method="post" enctype="multipart/form-data" autocomplete="off">
							<div style="padding: 20px; padding-left: 35px;"> 
								<center> <form action='' method="post">
									<table style="font-size: 14px">
										<tr>
											<td> Course </td>
											<td> : </td>
											<td> 
												<select id="course_x" class="input" style="width: 100px; margin-left: 3px;" onchange="sem_x1()">
														<option value='BTECH'> B.Tech </option>
														<option value='MTECH'> M.Tech </option>
												</select>
											</td>
											<td> Sem </td>
											<td> : </td>
											<td>
												<select id="sem_x" class="input"></select>
											</td>
										</tr>
										<tr>
											<td colspan=6 align="right">
												<input type="button" onclick="fetchDetails()" class="button" value="Go" style="width:auto; padding:5px 15px;border-radius:5px; border: none">
											</td>
										</tr>
									</table>
								</center> </form>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>

		<h1> Redirection or AJAX load details... <br>
			 fetchDetails() & studDetails()
		</h1>
	</body>
</html>

<script type="text/javascript">
	window.onload = function()
	{
	    document.getElementById("has_lgn_1").addEventListener('click', department);
	    document.getElementById("has_lgn_2").addEventListener('click', student);
	}

	function student()
	{
		document.getElementById("has_lgn_1_x").style.display = "none";
		document.getElementById("has_lgn_2_x").style.display = "block";
		document.getElementById("button2").style.backgroundColor = "darkgrey";
		document.getElementById("button1").style.backgroundColor = "#F7F7F7";

		name_call();
	}

	function department()
	{
		document.getElementById("has_lgn_2_x").style.display = "none";
		document.getElementById("has_lgn_1_x").style.display = "block";
		document.getElementById("button1").style.backgroundColor = "darkgrey";
		document.getElementById("button2").style.backgroundColor = "#F7F7F7";
		sem_x1();
	}
	function sem_x1()
	{	
		clear();
		var c = document.getElementById('course_x');
		var sel = document.getElementById('sem_x');
		var a;
		if(c.value=="BTECH")
		{
			for (var i = 1; i <= 8; i++) 
			{
				var opt = document.createElement("option");
				opt.appendChild(document.createTextNode("S"+i));
				opt.value="S"+i;
				sel.appendChild(opt);
			}
		}
		else
		{
			for (var i = 1; i <= 4; i++) 
			{
				var opt = document.createElement("option");
				opt.appendChild(document.createTextNode("M"+i));
				opt.value="M"+i;
				sel.appendChild(opt);
			}
		}
	}sem_x1();
	function clear()
	{
		var sel = document.getElementById('sem_x');
		for (var i = sel.length; i >= 0; i--) 
			sel.remove(i);
	}
</script>