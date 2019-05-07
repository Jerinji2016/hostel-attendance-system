<?php
    include 'dbConnect.php';
	if(!empty($_POST['userid']))
	{
		$user = $_POST['userid'];
		$pass = $_POST['password'];
	}

	$var_sql = "SELECT user_id,password FROM login";
	$result = mysql_query($var_sql);
 	
	session_start();
	echo $_SESSION['user'];

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
				header("Location: ../php/mbc.php");
			}
			else
				header("Location: ../login.html");
		}
	}
?>