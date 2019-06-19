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
			<div id="selectTab" style="width: 500px; margin: 0px auto; margin-top: 115px">
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
					<div style="display: none"; class="has_lgn_tl_x" id="has_lgn_1_x">
						<div style="padding: 20px; padding-left: 35px;">
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
									</td>
								</tr>
							</table>
						</div>
					</div>

					<?php
						include 'dbConnect.php';
						$varsql = "SELECT name,user_id,admin_priority FROM login";
						$result = mysql_query($varsql);
						$sn = 1;
					?>
					<!-- Division - 2 -->
					<div style="display: block; padding: 20px"; class="has_lgn_tl_x" id="has_lgn_2_x">
						<div style="padding: 0px">
							<center>	
								<table style="width: 450px" border="1">
									<tr>
										<th> Sl No. </th>
										<th> Name </th>
										<th> User Id </th>
										<th> Priority </th>
										<th colspan="3"> Actions </th>
									</tr>
									<?php 
										while ($row = mysql_fetch_array($result)) 
										{
											if($row[1] == $_SESSION['userid'])
												continue;
											echo "<tr>";

											echo "<td>".$sn++."</td>";
											echo "<td> $row[0] </td>";
											echo "<td> $row[1] </td>";
											echo "<td> $row[2] </td>";
									?>
											<td> 
												<div class="tooltip">
													<img src="../images/adminPanel_icons/admin_priority.png" class="iconImg"/>
													<span class="tooltiptext"> Manage Admin Priority </span>
												</div>
											</td>
											<td>
												<div class="tooltip">
													<img src="../images/adminPanel_icons/edit.png" class="iconImg"/>
													<span class="tooltiptext"> Edit Password </span>
												</div>
											</td>
											<td onclick="deleteConf('<?php echo $row[1] ?>')">
												<div class="tooltip">
													<img src="../images/adminPanel_icons/delete.png" class="iconImg">
													<span class="tooltiptext" id="dlt"> Delete Admin </span>
												</div>
											</td>
									<?php
											echo "</tr>";
										}
									?>
								</table>
							</center>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- Trigger/Open The Modal -->
		<p id="er">Open Modal</p>

		<!-- The Modal -->
		<div id="deleteConf" class="modal">
		    <div class="modal-content"> 			<!-- Modal Content -->
		    	<span class="close">&times;</span>
		    	<p>
		    		<center>
			    		I know its not your account. Don't be bossy cause you are admin! <br>
			    		Are you sure you want to delete this account <br>
			    		<button id="y" style="background-color: red"> Damn! Yeah </button> <button id="n" style="background-color: red"> Oh! No </button>
		    		</center>
		    	</p>
		    </div>
		    <div id="result">
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
	}

	function createAdmin_visible()
	{
		document.getElementById("has_lgn_2_x").style.display = "none";
		document.getElementById("has_lgn_1_x").style.display = "block";
		document.getElementById("button1").style.backgroundColor = "darkgrey";
		document.getElementById("button2").style.backgroundColor = "#F7F7F7";
		document.getElementById("selectTab").style.width = "400px";
	}

	/* Get the modal
	var modal = document.getElementById("deleteConf");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() 
	{
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() 
	{
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) 
	{
		if (event.target == modal) 
	  		modal.style.display = "none";
	}*/

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
				{
					alert("account Removed");
					document.getElementById('er').innerHTML = xhr.responseText
				}
			}
			xhr.send(x);
		}
	}

	function mkAdmin()
	{
		var name = document.getElementById('a_name').value;
		var userid = document.getElementById('a_userid').value;
		var password = document.getElementById('a_password').value;
		var pass_conf = document.getElementById('a_pass_conf').value;
		var priority = document.getElementById('a_priority').value;
		var incharge = document.getElementById('a_incharge').value;

		if(password == pass_conf)
		{
			console.log("da");
			var x = "&name="+name+"&userid="+userid+"&password="+password+"&priority="+priority+"&incharge="+incharge+"&action=1";
			var xhr = new XMLHttpRequest();
			xhr.open('GET','editAdmin.php?'+x,true);
			xhr.onreadystatechange = function()
			{
				if(xhr.readyState==4 && xhr.status==200)
				{
					console.log("ere");
					alert("Admin Added");
					document.getElementById('er').innerHTML = xhr.responseText;
				}
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