<?php

	include 'dbConnect.php';

	session_start();// Starting Session
	// Storing Session
	$user_check=$_SESSION['userid'];

	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysql_query("SELECT user_id FROM login WHERE user_id='$user_check'");
	$row = mysql_fetch_array($ses_sql);
	$login_session = $row[0];

	if(!isset($login_session))
	{
		header('Location: ../login.html'); // Redirecting To Home Page
	}
?>