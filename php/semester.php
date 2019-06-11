<?php
	$c=$_GET['c'];

	$mon = date("m");

	if($mon >= 2 && $mon <=7)
		$i=1;
	else
		$i=2;

	echo "<select class='input' id='semester' name='semester' class='has_sel_fld' style='width: 100px; margin-left: 3px; height: 28px' onchange='name_call()'>";

	if($c == "BTECH")
	{
		for($i;$i<9;$i+=2)
		{
			echo "<option value='S$i'> S$i</option>";
		}
		echo "</select>";
	}
	else
	{
		for($i;$i<5;$i+=2)
		{
			echo "<option value='M$i'> M$i</option>";
		}
		echo "</select>";
	}
?>