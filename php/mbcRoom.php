<?php
    include 'dbConnect.php';
	$hostel = $_GET['hostel'];
	$floor = $_GET['floor'];
	
	$var_sql="SELECT DISTINCT room_no FROM hostel_details WHERE hostel_code='$hostel' AND floor_no='$floor' ORDER BY room_no";
	$result=mysql_query($var_sql);
	echo "<select class='has_sel_fld' style='width: 100px; margin-left: 3px;' id='roomno'>";
	echo "<option value=''>-select-</option>";
	while($row=mysql_fetch_array($result))
	{
		echo "<option value='$row[0]'> $row[0] </option>";
		
	}
	echo"</select>";
?>
