<?php
    include 'dbConnect.php';
	if(!empty($_POST['userid']))
	{
		$user = $_POST['userid'];
		$pass = $_POST['password'];
	}

	$var_sql = "SELECT user_id,password,admin_priority,name FROM login";
	$result = mysql_query($var_sql);
 	
	session_start();

	$flag = 0;
	while($row = mysql_fetch_array($result))
	{
		if($user == $row[0])
		{
			if(md5($pass) == $row[1])
			{
				$var_sql = "INSERT INTO login_details(user_id) VALUES ('".$user."')";
				mysql_query($var_sql);
                $_SESSION['userid'] = $user;
                $_SESSION['u_name'] = $row[3];
                $_SESSION['user_priority'] = $row[2];
				if($row[2] > 1)
					header("Location: mbc.php");
				else
					header("Location: sendSMS.php");
			}
			else
				header("Location: ../login.html");
		}
	}
?>