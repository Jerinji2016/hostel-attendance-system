<?php 
	include 'session.php';
	include 'dbConnect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Change Password </title>
	</head>
	<body>
		<?php 
			include 'sidebarAdmin.php';
			session_start();
		 ?>

		<input type="text" value="5" id="display" style="display: none">
		<script type="text/javascript"> focusSidebar(); </script>
		
		<center>
			<div id="main" style="margin: 0px auto; margin-top: 15px">
				<div style="width: 400px; margin: 0px auto; margin-top: 115px; color: white; background-color: #262626">
					<b> Change Password </b>
				</div>
				<div>
					<form>
						<table>
							<tr>
								<td> New Password </td>
								<td> : </td>
								<td> <input type="password" id="pass" placeholder="New Password" autocomplete="new-password"> </td>
							</tr>
							<tr>
								<td> Re-Enter Password </td>
								<td> : </td>
								<td> <input type="password" id="pass_conf" placeholder="Confirm Password"> </td>
							</tr>
							<tr>
								<td colspan="3"> 
									<input type="button" value="GO" onclick="changePassword('<?php session_start(); echo $_SESSION['userid'] ?>')">
									<input type="reset" value="Clear">
								</td>								
							</tr>
						</table>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>

<script type="text/javascript">
	function changePassword(user)
	{
		var pass = document.getElementById('pass').value;
		var pass_conf = document.getElementById('pass_conf').value;

		if(pass=="" || pass_conf=="")
		{
			alert("Password cannot be Empty");
		}
		else
			if(pass!=pass_conf)
			{
				alert("Password mismatch");
				pass.value="";
				pass_conf.value="";
			}
			else
				if(pass==pass_conf)
				{
					var xhr = new XMLHttpRequest();
					var x = "&user="+user+"&password="+pass+"&action="+3;
					xhr.open('GET','editAdmin.php?'+x,true);
					xhr.onreadystatechange = function()
					{
						if(xhr.readyState==4 && xhr.status==200)
						{
							pass.value = "";
							pass_conf.value = "";
							alert("Password Changed");
						}
					}
					xhr.send(x);
				}	
	}
</script>