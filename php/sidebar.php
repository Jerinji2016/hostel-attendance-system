<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<style type="text/css">
	body{
		font-family: 'Open Sans';
	}
	.sidebar 
	{
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}
	.sidebar a 
	{
		text-align: left;
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 20px;
		color: #818181;
		display: block;
		transition: 0.3s;
	}
	.sidebar a:hover 
	{
		color: #F1F1F1;
	}
	.openbtn 
	{
		font-size: 20px;
		cursor: pointer;
		position: fixed;
		background-color: #d6d6d6;
		color: black;
		padding: 10px 15px;
		border: none;
		border-radius: 5px;
		box-shadow: 0px 0px 7px #666;
	}
	.openbtn:hover 
	{
		background-color: #444;
		color: #d6d6d6;
	}
	#main 
	{
		transition: margin-left .5s;
		padding: 16px;
	}
	@media screen and (max-height: 450px) 
	{
		.sidebar {
			padding-top: 15px;
		}
		.sidebar a {
			font-size: 18px;
		}
	}
	.logout-button{
		border: none;
		background-color: lightgray;
		height: 30px;
		width: 80px;
		border-radius: 5px;
	}
	.logout-button:hover{
		background-color: royalblue;
		color: white;
		cursor: pointer;
	}
</style>

<div style="width: 100%" align="right">  <!--div for logout button-->
	<div id="navButton" align="left" style="transition: margin-left .5s">
		<button class="openbtn" onclick="openNav()" style="align">☰ </button>
	</div>
	<form action="logout.php" method="post">
		<div style="margin-top: 15px; margin-right: 0">
			Logged in as: <b> 
			<?php 
			session_start();
			echo $_SESSION['userid']; 
			?> 
			&nbsp; </b>
			<button class="logout-button" type="submit" value="logout">Logout</button>
		</div>
	</form>
</div>

<div id="adminBar" class="sidebar">
	<a id="attend_option" href="#" onclick="window.location='mbc.php';"> 
		Attendance 
	</a>
	<a id="view_option" href="#" onclick="window.location='attendanceTab_admin.php';"> View Record </a>
	<a id="leave_option" href="#"> Leave Request </a>
</div>

<script type="text/javascript">
	var panelFlag = 0;
	function openNav() 
	{
		if(panelFlag == 0)
		{
			document.getElementById("adminBar").style.width = "180px";
			document.getElementById("main").style.marginLeft = "180px";
			document.getElementById("navButton").style.marginLeft = "180px";
			panelFlag++;
		}
		else
			closeNav();
	}

	function closeNav() 
	{
		document.getElementById("adminBar").style.width = "0";
		document.getElementById("main").style.marginLeft= "180";
		document.getElementById("navButton").style.marginLeft = "0";    
		panelFlag--;
	}
	function focusSidebar()
	{
		var display = document.getElementById("display").value;
		if(display == "1")
			document.getElementById("attend_option").style.color = "#F1F1F1";
		else
			if(display == "2")
				document.getElementById("view_option").style.color = "#F1F1F1";
	}
</script>