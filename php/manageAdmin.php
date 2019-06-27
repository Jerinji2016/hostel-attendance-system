<?php include 'session.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<title> Manage Admin </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/tabStyle.css?v=1">
		<style type="text/css">
			td{
				padding: 3px;
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
			    border-bottom: 1px dotted black;
			    padding-left: 20px;
			    padding-top: 8px;
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
				margin: auto;
				padding: 20px;
				border: 1px solid #888;
				width: 30%;
			}

			/* The Close Button */
			.close {
				color: #aaaaaa;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}

			.close:hover,.close:focus {
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
											<input type="text" id="a_userid" placeholder="Username">
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
		}
		manageAdmin_visible();
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
			alert("something");
		}
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

</script>