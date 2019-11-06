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
		<table style="width: 450px; text-align: center" class="t2">
			<tr>
				<th> Sl No. </th>
				<th> Name </th>
				<th> User Id </th>
				<th> Priority </th>
				<th> Delete </th>
			</tr>
			<?php 
				while ($row = mysql_fetch_array($result)) 
				{
					if($row[1] == $_SESSION['userid'])
						continue;
					echo "<tr>";

					echo "<td>".$sn++."</td>";
					echo "<td> $row[0] </td>";
			?>
					<!-- Password Edit --> 
					<td> 
						<div style="float: left"> 
							<?php echo $row[1] ?>
						</div>
						<div id="passChange" class="tooltip" style="float: right" onclick="user[0]='<?php echo $row[1] ?>'; user[1]='<?php echo $row[0] ?>' ;passModalShow()">
							<img src="../images/adminPanel_icons/edit.png" class="iconImg"/>
							<span class="tooltiptext"> Change Password </span>
						</div> 
					</td>
		
					<!-- Priority Change -->
					<td> 
						<div style="float: left; margin-left: 20px"> 
							<?php echo $row[2] ?>
						</div>
						<div class="tooltip" style="float: right" id="spanIcon">
							<img src="../images/adminPanel_icons/admin_priority.png" class="iconImg" onclick="user[0]='<?php echo $row[1] ?>'; user[1]='<?php echo $row[0] ?>' ;priorModalShow('<?php echo $row[2] ?>')">
							<span class="tooltiptext"> Change Priority </span>
						</div>
					</td>

					<!-- Delete Admin -->
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

		<input type="button" value="Refresh" onclick="manageAdmin_visible()">
	</center>
</div>