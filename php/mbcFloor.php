<?php
	$hostel_code=$_GET['hostel_code'];
	
    include 'dbConnect.php';

	$var_sql="SELECT DISTINCT floor_no FROM hostel_details WHERE hostel_code='$hostel_code' ORDER BY floor_no";
	$result=mysql_query($var_sql);

	echo"<select id='floorno' class='has_sel_fld' style='width: 100px; margin-left: 3px;' onchange='room()'>";
	echo"<option value=''>-select-</option>";

	while($row=mysql_fetch_array($result))
	{
	?>
	<?php echo "<option value='$row[0]'>";?><?php echo $row[0]."</option>"; ?>
	<?php
	}
	echo"</select>";
?>
