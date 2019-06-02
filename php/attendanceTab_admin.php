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
	</head>
	<body>
		<?php include 'sidebar.php' ?>

		<div id="main" style="width: 1000px; margin: 0px auto; margin-top: 130px; padding: 0%">
			<div style="width: 400px; margin: 0px auto">
				<div style="border-radius: 7px 7px 0px 0px; padding: 15px 20px; background-color: #0C0C0C; 
							box-shadow: 0px 0px 15px #666;">
					<span style="color:#09F; font-size: 18px; font-family: Arial Black">
						<div id="head"> View Attendance Records </div>
					</span>
				</div>

				<div style="color: #666; background-color: #F7F7F7; border-radius: 0px 0px 7px 7px; text-align: left; box-shadow: 0px 0px 15px #999;">
					<div id="viewByStudent" style="border-left:0; display: inline; font-weight: bold;">
						<a href="#"> Head 1 </a>   
					</div>
					
					<div id="viewByDate" style="border-right:0; display: inline;">
						<a href="#">|  Head 2 </a>
					</div>

					<div id="viewByHostel" style="display: inline">
						<a href="#">|  Head 3 </a> 
					</div>

					<!-- Division - 1 -->
					<div id="div_1" style="clear:both;"; class="has_lgn_tl_x">
						<center>
							Division-1
						</center>
					</div>

					<!-- Division - 2 -->
					<div id="div_2" style="clear:both; display: none"; class="has_lgn_tl_x">
						<center>
							Division-2
						</center>
					</div>

					<!-- Division - 3 -->
					<div id="div_3" style="clear:both; display: none"; class="has_lgn_tl_x">
						<center>
							Division-3
						</center>
					</div>
				</div>
			</div>
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
		document.getElementById('viewByHostel').style.fontWeight ="bold";
		document.getElementById('viewByStudent').style.fontWeight ="normal";
		document.getElementById('viewByDate').style.fontWeight ="normal";
		console.log("here3");
	}
</script>