<?php
	//This file contains all the Actions done by Admin

	$action = $_GET['action'];
	include 'dbConnect.php';

	if ($action == 1) 
	{
		//Code to Create new Admins
		$var_sql = "INSERT INTO login(name,user_id,password,incharge,admin_priority) VALUES('".$_GET['name']."','".$_GET['userid']."','".md5($_GET['password'])."','".$_GET['incharge']."',".$_GET['priority'].")";
	}
	elseif($action == 2)
	{
		//Code to delete admin from Database
		$user_id = $_GET['uid'];

		include 'dbConnect.php';
		$var_sql = "DELETE FROM login WHERE user_id='".$user_id."'";
	}
	elseif($action == 3)
	{
		//Code to change other admin Password
		$user = $_GET['user'];
		$pass = $_GET['password'];
		$var_sql = "UPDATE login SET password='".md5($pass)."' WHERE user_id='$user'";
	}
	elseif($action == 4)
	{
		//Code for change Admin Priority
		$user = $_GET['user'];
		$prior = $_GET['priority'];
		$var_sql = "UPDATE login SET admin_priority=$prior WHERE user_id='$user'";
	}
	elseif($action == 5)
	{
		//Code for change my Password
	}
	mysql_query($var_sql);
?>