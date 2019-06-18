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
		</style>
	</head>
	<body>
		<?php include 'sidebarAdmin.php' ?>

		<!-- To HighLight in SideBar -->
		<input type="text" value="2" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>

		<div id="main" style="margin: 0px auto; margin-top: 15px">
			<div style="width: 400px; margin: 0px auto; margin-top: 115px">
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
					<div style="display: block"; class="has_lgn_tl_x" id="has_lgn_1_x">
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
									<td> Paswword </td>
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
									<td align="right" colspan="3"> 
										<input type="button" class="button" value="Go" id="mkAdmin">
									</td>
								</tr>
							</table>
						</div>
					</div>

					<!-- Division - 2 -->
					<div style="display: none"; class="has_lgn_tl_x" id="has_lgn_2_x">
						<div style="padding: 20px; padding-left: 35px;">
							hi
						</div>
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


		name_call();
	}

	function createAdmin_visible()
	{
		document.getElementById("has_lgn_2_x").style.display = "none";
		document.getElementById("has_lgn_1_x").style.display = "block";
		document.getElementById("button1").style.backgroundColor = "darkgrey";
		document.getElementById("button2").style.backgroundColor = "#F7F7F7";
	}
</script>