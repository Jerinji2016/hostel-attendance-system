var panelFlag = 0;
function openNav() 
{
	if(panelFlag == 0)
  	{
  		document.getElementById("adminBar").style.width = "180px";
	  	document.getElementById("main").style.marginLeft = "180px";
	  	document.getElementById("navButton").style.marginLeft = "180px";
		panelFlag++;
	}
	else
		closeNav();
}

function closeNav() 
{
  	document.getElementById("adminBar").style.width = "0";
  	document.getElementById("main").style.marginLeft= "0";
  	document.getElementById("navButton").style.marginLeft = "0";	
  	panelFlag--;
}