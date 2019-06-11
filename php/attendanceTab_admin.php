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
		<link rel="stylesheet" type="text/css" href="../css/autocomplete.css">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

		<style>
			body{
				font-family: 'Open Sans';
			}
			#viewByStudent,#viewByDate,#viewByHostel{
				transition: transform .2s;
				border: none;
				width: 133px;
				height: 50px;
			}
			#viewByStudent:hover,#viewByDate:hover,#viewByHostel:hover{
				transform: scale(1.1);
				background-color: #c6c6c6;
			}
			.FormDispArea{
				color: #666;
				background-color: #F7F7F7;
				border-radius: 0px 0px 25px 25px;
				box-shadow: 0px 0px 15px #999;
			}
			.FormDispArea p{
				margin: 10px;
			}
			footer{        								 /*DO NOT CHANGE*/
				position: fixed;                         /*CODE VERIFIED - OK*/
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: black;
				color: white;
				text-align: center;
			}
			.button_go{									/*DO NOT CHANGE*/
				border: none;							/*CODE VERIFIED - OK*/
				background-color: darkgray;
				height: 30px;
				width: 80px;
				border-radius: 5px;
			}
			.button_go:hover{							/*DO NOT CHANGE*/		
				background-color: royalblue;			/*CODE VERIFIED - OK*/
				color: white;
				cursor: pointer;
			}
			.input{
				height: 25px;
				border-radius: 7px;
				border-style: dotted;
				border-color: darkgray;
				font-family: 'Open Sans'
			}
			.has_lgn_tl_x p{
				font-family: 'Open Sans';
				font-weight: lighter;
			}
			@media (max-width: 500px){
				.main_form{
					padding-right: 25px;
					padding-top: 100px;
				}
			}
		</style>
	</head>
	<body>
		<input type="text" value="2" id="display" style="display: none"> <!--FOR SIDEBAR BUTTON-->
		<?php include 'sidebar.php' ?>
		<script type="text/javascript"> focusSidebar(); </script>

		<div id="main">
			<div class="main_form" style="width: 400px; margin: 0px auto; margin-top: 7%"> <!-- The Whole Box-->
				<div style="border-radius: 25px 25px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						<div id="head" style="text-align: center; font-family: 'Open Sans'; font-weight: bold"> View Attendance Records </div>
					</span>
				</div>

				<div class="FormDispArea">
					<div style="border-left: 1px; display: inline; font-weight: bold">
						<button id="viewByStudent" name="head1" value="head1" style="float: left; background-color: darkgray; font-weight: bold">Student</button>   
					</div>

					<div style="border-right:0; display: inline;">
						<button id="viewByDate" name="head2" value="head2" style="float: center">Date</button>   
					</div>

					<div style="display: inline">
						<button id="viewByHostel" name="head3" value="head3" style="float: right">Hostel</button>   
					</div>

					<!-- Division - 1 -->
					<div id="div_1" style="clear:both; padding: 20px" class="has_lgn_tl_x">
						<center>
							<form action="" method="post">
								<div style="width: auto">
									Adm No : 
									<input class="input" type="text" required="on" autofocus="on" autocomplete="off" style="width: 100px">
									<button class="button_go" style="margin-left: 5px">GO</button>
									<!--<input class="button" type="submit" value="GO">-->
								</div>
							</form>
							<div>
								<br>
								─────────────────────────────
								<br>
							</div>
							<form method="post" action="">
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
														<option class="input">-select-</option>
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
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td align="right" colspan="right"> 
												<button class="button_go">GO</button>
												<!--<input class="button" type="submit" value="GO">-->
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
					<div id="div_2" style="clear:both; display: none; padding: 30px" class="has_lgn_tl_x">
						<center>
							<?php date_default_timezone_set("Asia/Kolkata"); ?>
							<label> &nbsp; &nbsp; Date : </label> 
							<input class="input" type="date" id="myDate" value="<?php echo date('Y-m-d'); ?>">
							<br> <br>
							<button class="button_go">GO</button>
						</center>
					</div>

					<!-- Division - 3 -->
					<div id="div_3" style="clear:both; display: none" class="has_lgn_tl_x">
						<center>
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
									<tr height="30" id="floor_change"> </tr>

									<tr height="30" id="room_change"> </tr>
									<tr>
										<td> </td>
										<td> </td>
										<td>
											<button class="button_go"> GO </button> 
										</td> 
									</tr>

								</table>
							</div>
						</center>
					</div>
				</div>
			</div>
			<div style="height: 5%">
				<p style="color: white">Send your feedback at: </p>
			</div>
			<footer>
				<p style="color: white">Made with <span style="color: red; font-size: 20px">&#x2764;</span> by the Software Development Cell | MBCCET</p>
			</footer>
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

	function floor()
	{	
		var target=document.getElementById("floor_change");
		var hostel_code=document.getElementById("hostelno").value;
		var floor="<td> Floor </td> <td> : </td> <td>";
		var xhr = new XMLHttpRequest();
		var x="&hostel_code="+hostel_code;
		xhr.open('GET','mbcFloor.php?'+x,true);
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
			{
				target.innerHTML=floor+xhr.responseText+"</td>";
			}
		}
		xhr.send(x);
	}

	function room()
	{
		var target=document.getElementById("room_change");
		var hostel=document.getElementById("hostelno").value;
		var floor=document.getElementById("floorno").value;
		var room="<td> Room </td> <td> : </td> <td>";
		var xhr=new XMLHttpRequest();
		var x="&hostel="+hostel+"&floor="+floor;
		xhr.open('GET','mbcRoom.php?'+x,true);

		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
			{
				target.innerHTML=room+xhr.responseText+"</td>";
			}
		}
		xhr.send(x);
	}

</script>