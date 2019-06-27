<?php
	include 'dbConnect.php';
	session_start();
	$varsql = "SELECT name,user_id,admin_priority FROM login";
	$result = mysql_query($varsql);
	$sn = 1;

	$var = "SELECT user_id FROM login";
	$res = mysql_query($var);
	while ($row = mysql_fetch_array($res)) 
	{
		if($row[0] == $_SESSION['userid'])
			continue;
	 	?>
	 		<script type="text/javascript">
	 			u.push('<?php echo $row[0] ?>');
	 		</script>
	 	<?php
	} 
?>

<div style="padding: 0px">
	<center>	
		<table style="width: 450px" border="1">
			<tr>
				<th> Sl No. </th>
				<th> Name </th>
				<th> User Id </th>
				<th> Priority </th>
				<th colspan="3"> Actions </th>
			</tr>
			<?php 
				while ($row = mysql_fetch_array($result)) 
				{
					if($row[1] == $_SESSION['userid'])
						continue;
					echo "<tr>";

					echo "<td>".$sn++."</td>";
					echo "<td> $row[0] </td>";
					echo "<td> $row[1] </td>";
					echo "<td> $row[2] </td>";
			?>
					<td> 
						<div class="tooltip">
							<img src="../images/adminPanel_icons/admin_priority.png" class="iconImg"/>
							<span class="tooltiptext"> Change Admin Priority </span>
						</div>
					</td>
					<td onclick="editConf('<?php echo $row[1] ?>')">
						<div class="tooltip">
							<img src="../images/adminPanel_icons/edit.png" class="iconImg"/>
							<span class="tooltiptext"> Edit Password </span>
						</div>
					</td>
					<td onclick="deleteConf('<?php echo $row[1] ?>')">
						<div class="tooltip">
							<img src="../images/adminPanel_icons/delete.png" class="iconImg">
							<span class="tooltiptext" id="dlt"> Delete Admin </span>
						</div>
					</td>
			<?php
					echo "</tr>";
				}
			?>
		</table>
	</center>
</div>