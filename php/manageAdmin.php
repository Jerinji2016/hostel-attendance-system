<script type="text/javascript">
	var u = ['a'];
	u.length = 0;
	var user = ['this_shud','not_come'];
	var spanFlag = 0;
</script>
<?php 
	include 'session.php';
	include 'dbConnect.php';
	session_start();

	$var = "SELECT user_id FROM login";
	$res = mysql_query($var);
	while ($row = mysql_fetch_array($res)) 
	{
	 	?>
	 		<script type="text/javascript">
	 			u.push('<?php echo $row[0] ?>');
	 		</script>
	 	<?php
	} 
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Manage Admin - MBCCET Peermade </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/tabStyle.css?v=1">
		<style type="text/css">
			th, td .t2{
 				border-bottom: 1px solid #a1a1a1;
 				padding: 5px;
			}
			*{
				font-family: 'Open Sans';
			}
			.iconImg {
				width: 20px;
				height: 20px;
			}
			.tooltip {
				position: relative;
			    display: inline-block;
				cursor: pointer;
			}

			.tooltip .tooltiptext {
			    visibility: hidden;
			    width: 120px;
			    background-color: black;
			    color: #fff;
			    text-align: center;
			    border-radius: 6px;
			    padding: 5px 0;

		 	    /* Position the tooltip */
			    position: absolute;
			    z-index: 1;
			}

			.tooltip:hover .tooltiptext {
			    visibility: visible;
			    transition-delay: 650ms;
			    transition-duration: .8s;
			}

			.modal {
		  		display: none; /* Hidden by default */
			  	position: fixed; /* Stay in place */
			  	z-index: 1; /* Sit on top */
			  	padding-top: 100px; /* Location of the box */
			  	left: 0;
			  	top: 0;
			  	width: 100%; /* Full width */
			  	height: 100%; /* Full height */
			  	overflow: auto; /* Enable scroll if needed */
			  	background-color: rgb(0,0,0); /* Fallback color */
			  	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
			  	background-color: #fefefe;
			  	margin-top: 12%;
			  	padding: 15px;
			  	border: 1px solid #888;
			  	width: 40%;
			}
			.close {
			  	color: #aaaaaa;
			  	float: right;
			  	font-size: 28px;
			  	font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  	color: #000;
			  	text-decoration: none;
			  	cursor: pointer;
			}
		</style>
	</head>
	<body>
		<?php include 'sidebarAdmin.php' ?>
		
		<!-- To HighLight in SideBar -->
		<input type="text" value="2" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>

		<div id="main" style="margin: 0px auto; margin-top: 15px">
			<div id="selectTab" style="width: 400px; margin: 0px auto; margin-top: 115px">
				<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						Manage Admins
					</span>
				</div>

				<div style="color: #666; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;"> 
                    <div class="clear" style="height:50px;">
						<div class="has_lgn_tl" id="has_lgn_1" style="border: none; padding: 0; width: 50%">
	                        <button id="button1" name="head1" style="float: left;  font-weight: bold; width:100%; background-color: darkgrey">
								Create Admin
	                        </button>
						</div>
						
						<div class="has_lgn_tl atv" id="has_lgn_2" style="border:none; padding: 0; width:50%">
							<button id="button2" name="head2" style="float: right; font-weight: bold; width:100%">
								Manage Admin
	                    	</button>
						</div>
					</div>
					<!-- Division - 1 -->
					<div style="display: block;"; class="has_lgn_tl_x" id="has_lgn_1_x">
						<div style="padding: 20px; padding-left: 35px;">
							<form>
								<table>
									<tr>
										<td> Name </td>
										<td> : </td>
										<td> 
											<input type="text" id="a_name" placeholder="Full Name" />
										</td>
									</tr>
									<tr>
										<td> User ID </td>
										<td> : </td>
										<td> 
											<input type="text" id="a_userid" placeholder="Username" oninput="checkuid()">
										</td>
									</tr>
									<tr>
										<td> Password </td>
										<td> : </td>
										<td>
											<input type="Password" id="a_password" placeholder="Password" autocomplete="new-password">
										</td>
									</tr>
									<tr>
										<td> Confirm Password </td>
										<td> : </td>
										<td> 
											<input type="Password" id="a_pass_conf" placeholder="Password Again">
										</td>
									</tr>
									<tr>
										<td> Incharge </td>
										<td> : </td>
										<td>
											<input type="text" id="a_incharge" placeholder="Incharge Off">
										</td>
									</tr>
									<tr>
										<td> Priority </td>
										<td> : </td>
										<td> 
											<select id="a_priority">
												<option value=1> 1 (Admin) </option>
												<option value=2> 2 (Warden) </option>
												<option value=3> 3 (Staff Incharge) </option>
												<option value=4> 4 (Other Admin) </option>
											</select>
										</td>
									</tr>
									<tr>
										<td align="right" colspan="3"> 
											<input type="button" class="button" value="Go" onclick="mkAdmin()">
											<input type="reset" class="button" value="Clear">
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>

					<!-- Division - 2 -->
					<div style="display: none; padding: 20px"; class="has_lgn_tl_x" id="has_lgn_2_x">
					</div>
				</div>				
			</div>
		</div>

		<div id="passwordConfirm" class="modal">
			<center>
				<div class="modal-content">
					<span class="close">&times;</span>
					<div>
						<b> Change Password of <label id="u"></label> : </b> <br>
					</div>
					<div style="padding: 20px">
						<form>
							<table style="padding: 10px">
								<tr>
									<td> New Password : </td>
									<td> 
										<input type="password" id="pass" placeholder="New Password"> 
									</td>
								</tr>
								<tr>	
									<td> Re-Enter password : </td>
									<td>
										<input type="password" id="pass_conf" placeholder="Confirm Password">
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center">		
										<div style="margin-top: 15px">
											<input type="button" class="button" value="Change" onclick="changePassword(user)">
											<input type="reset" class="button" value="Clear">
										</div>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</center>
		</div>

		<div id="priorityConfirm" class="modal">
			<center>
				<div class="modal-content" style="width: 30%">
					<span class="close">&times;</span>
					<div>
						<b> Change Priority of <label id="u1"></label> : </b> <br>
					</div>
					<div style="padding: 20px">
						<div>
							<table style="margin-bottom: 20px">
								<tr>
										<!-- Radio list for priority -->
									<td> <input type="radio" name="p" id="prio1" value="1"> </td> 
									<td> <label> 1 (Admin) </label> <br> </td>
								</tr>
								<tr>
									<td> <input type="radio" name="p" id="prio2" value="2"> </td> 
									<td> <label> 2 (Warden) </label> <br> </td>
								</tr>
								<tr>
									<td> <input type="radio" name="p" id="prio3" value="3"> </td> 
									<td> <label> 3 (Staff Incharge) </label> <br> </td>
								</tr>
								<tr>
									<td> <input type="radio" name="p" id="prio4" value="4"> </td> 
									<td> <label> 4 (Other Admin) </label> <br> </td>
								</tr>
							</table>
						</div>
						<div>
							<input type="button" value="GO" onclick="changePriority(user)">
							<input type="button" value="Reset" id="priorReset">
						</div>
					</div>
				</div>
			</center>
		</div>
	</body>
</html>

<script type="text/javascript">

	window.onload = function()
	{	
	    document.getElementById("has_lgn_1").addEventListener('click', createAdmin_visible);
	    document.getElementById("has_lgn_2").addEventListener('click', manageAdmin_visible);
	}

	function manageAdmin_visible()
	{
		document.getElementById("has_lgn_1_x").style.display = "none";
		document.getElementById("has_lgn_2_x").style.display = "block";
		document.getElementById("button2").style.backgroundColor = "darkgrey";
		document.getElementById("button1").style.backgroundColor = "#F7F7F7";
		document.getElementById("selectTab").style.width = "500px";

		var xhr = new XMLHttpRequest();
		xhr.open('GET','adminList.php',true);

		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
				document.getElementById("has_lgn_2_x").innerHTML = xhr.responseText;
		}
		xhr.send();
	}

	function createAdmin_visible()
	{
		document.getElementById("has_lgn_2_x").style.display = "none";
		document.getElementById("has_lgn_1_x").style.display = "block";
		document.getElementById("button1").style.backgroundColor = "darkgrey";
		document.getElementById("button2").style.backgroundColor = "#F7F7F7";
		document.getElementById("selectTab").style.width = "400px";
	}

	function mkAdmin()
	{
		var name = document.getElementById('a_name').value;
		var userid = document.getElementById('a_userid').value;
		var password = document.getElementById('a_password').value;
		var pass_conf = document.getElementById('a_pass_conf').value;
		var priority = document.getElementById('a_priority').value;
		var incharge = document.getElementById('a_incharge').value;

		if(name=="" || userid=="" || password=="" || pass_conf=="" || priority=="" || incharge=="")
		{
			alert("Please fill in all fields");
		}
		else
		{
			if(password == pass_conf)
			{
				console.log("da");
				var x = "&name="+name+"&userid="+userid+"&password="+password+"&priority="+priority+"&incharge="+incharge+"&action=1";
				var xhr = new XMLHttpRequest();
				xhr.open('GET','editAdmin.php?'+x,true);
				xhr.onreadystatechange = function()
				{
					if(xhr.readyState==4 && xhr.status==200)
						alert("Admin Added");
				}
				xhr.send(x);
			}
			else
			{
				alert("Password Mismatch");
				document.getElementById('a_password').value = "";
				document.getElementById('a_pass_conf').value = "";
			}
		}
		window.location = 'manageAdmin.php';
	}

	function checkuid()
	{
		for(var i=0;i<u.length;i++)
			if(u[i] == document.getElementById('a_userid').value)
			{
				alert("Username Already Taken");
				document.getElementById('a_userid').value="";
			}
	}

	function deleteConf(uid)
	{
		var r = window.confirm("Are you sure to delete "+uid+"'s account?");
		if(r == true)
		{
			var xhr = new XMLHttpRequest();
			var x = "&uid="+uid+"&action=2";
			xhr.open('GET','editAdmin.php?'+x,true)
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState==4 && xhr.status==200)
					alert("account Removed");
			}
			xhr.send(x);
			window.location = 'manageAdmin.php';
		}
		
	}

	var passModal = document.getElementById("passwordConfirm");
	function passModalShow()
	{
		var span = document.getElementsByClassName("close")[0];
		document.getElementById('u').innerHTML = user[1];
		passModal.style.display = "block";
		
		span.onclick = function()
		{
			passModal.style.display = "none";
			document.getElementById('pass').value = "";
			document.getElementById('pass_conf').value = "";
		}
		window.onclick = function(event) 
		{
	 	 	if (event.target == passModal) 
	 	 	{
	    		passModal.style.display = "none";
	  		}
		}
	}

	function changePassword(user)
	{
		var pass = document.getElementById('pass').value;
		var pass_conf = document.getElementById('pass_conf').value;

		if(pass==pass_conf && pass!="")
		{
			passModal.style.display = "none";
			var xhr = new XMLHttpRequest();
			var x="&password="+pass+"&user="+user[0]+"&action="+3;
			xhr.open('GET','editAdmin.php?'+x,true);
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState==4 && xhr.status==200)
					alert("Password Changed"); 
			}
			xhr.send(x);
			pass.value = "";
			pass_conf.value = "";
		}
		else
			if(pass=="")
				alert("Password cannot be Empty");
			else
				alert("Passwords mismatch");
	}
 	
 	var priorModal = document.getElementById('priorityConfirm');
 	function priorModalShow(p)
 	{
 		priorModal.style.display = "block";
 		var span = document.getElementsByClassName("close")[1];
 		document.getElementById('u1').innerHTML = user[1];
 		document.getElementById('prio'+p).checked = true;
 		span.onclick = function()
		{
			priorModal.style.display = "none";
		}
		window.onclick = function(event) 
		{
	 	 	if (event.target == priorModal) 
	 	 	{
	    		priorModal.style.display = "none";
	  		}
		}
		document.getElementById('priorReset').onclick = function()
		{
			document.getElementById('prio'+p).checked = true;
		}
 	}

 	function changePriority(user)
 	{
 		if(window.confirm("Are you sure to Change the Admin Password?"))
	 	{	
	 		var i=1;
	 		while(i<=4)
	 		{
	 			if(document.getElementById('prio'+i).checked)
	 			{
	 				var xhr = new XMLHttpRequest();
	 				var x = "&user="+user[0]+"&priority="+i+"&action="+4;
	 				xhr.open('GET','editAdmin.php?'+x,true);
	 				xhr.onreadystatechange = function()
	 				{
	 					if(xhr.readyState==4 && xhr.status==200)
	 					{
	 						alert('Priority changed for '+user[1]);
	 						window.location = "manageAdmin.php";
	 					}
	 				}
	 				xhr.send(x);
	 			}
	 			i++;
	 		}
	 	}
 	}
</script>