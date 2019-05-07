<?php
	include 'dbconnect.php';

	$var_sql = "SELECT user_id FROM login_details WHERE si_no = (SELECT max(si_no) FROM login_details)";
	$result = mysql_query($var_sql);
	$row = mysql_fetch_array($result);

	if(!empty($_POST['log']))
	{
		foreach($_POST['log'] as $varx)
		{
			$z = "remark".$varx;
			$remark = $_POST[$z];
			$var = "INSERT INTO hostel_attendance_details(status,adm_no,entered_by,remarks) VALUES (1,".$varx.",'".$row[0]."','".$remark."')";
			mysql_query($var);
		}
	}
?>

<script>
	console.log("Data Submitted");
	window.location = '../php/mbc.php';
</script>