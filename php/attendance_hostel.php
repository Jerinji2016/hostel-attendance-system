<?php
	include 'dbconnect.php';

	$var_sql = "SELECT user_id FROM login_details WHERE si_no = (SELECT max(si_no) FROM login_details)";
	$result = mysql_query($var_sql);
	$row = mysql_fetch_array($result);

	$var_date = "SELECT si_no FROM hostel_date_details WHERE ";
	$var_date .= "date = '".$_COOKIE["dateCookie"]."'";
	$result_date = mysql_query($var_date);
	$row_date = mysql_fetch_array($result_date);
	
	if(!empty($_POST['log']))
	{
		foreach($_POST['log'] as $varx)
		{
			$z = "remark".$varx;
			$remark = $_POST[$z];
			$var = "INSERT INTO hostel_attendance_details(status,date_id,adm_no,entered_by,remarks) VALUES (1,".$row_date[0].",".$varx.",'".$row[0]."','".$remark."')";
			echo "<br>".$var;
			mysql_query($var);
		}
	}

	session_start();
	alert();
	if($_SESSION['user_priority'] == "1")
		header("Location: markAttendance.php");
	else
		header("Location: mbc.php");

	function alert()
	{
		echo "<script>";
		echo "alert('Data Submitted');";
		echo "</script>";
	}
?>