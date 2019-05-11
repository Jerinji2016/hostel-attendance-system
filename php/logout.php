<?php
	include 'dbConnect.php';

	session_start();
	if(session_destroy())
	{ // Destroying All Sessions
		//Default UTC timezone so this is required to set to Indian time
		date_default_timezone_set("Asia/Kolkata");
		
		//Retrieve last record from login _details
		$var = "SELECT MAX(si_no) FROM login_details";
		$res = mysql_query($var);
		$row = mysql_fetch_array($res);

		//Uodating log out time
		$var_sql="UPDATE login_details SET session_out='".date('Y-m-d H:i:s')."' WHERE si_no=".$row[0];
		mysql_query($var_sql);
		header("Location: ../login.html"); // Redirecting To Home Page
	}
?>

<script type="text/javascript">
	alert("Logged Out");
</script>
