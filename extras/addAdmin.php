<?php
	$username = "ajay";
	$password = "ajay";
	$priority = 1;

	include '../php/dbConnect.php';

	$var_sql = "INSERT INTO login(user_id,password,admin_priority) VALUES ('$username','".md5($password)."',$priority)";
	echo $var_sql;
	mysql_query($var_sql);

	echo "<br><br> Admin Record added to login Table";
?>