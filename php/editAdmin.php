<?php 
	$action = $_GET['action'];
	include 'dbConnect.php';

	if ($action == 1) 
	{
		$var_sql = "INSERT INTO login(name,user_id,password,incharge,admin_priority) VALUES('".$_GET['name']."','".$_GET['userid']."','".md5($_GET['password'])."','".$_GET['incharge']."',".$_GET['priority'].")";
?>
	<script type="text/javascript">
		alert("ADDed in PHP");
	</script>
<?php
	}
	elseif($action == 2)
	{
		$user_id = $_GET['uid'];

		include 'dbConnect.php';
		$var_sql = "DELETE FROM login WHERE user_id='".$user_id."'";
	}
	mysql_query($var_sql);
?>