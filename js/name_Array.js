/*
* This file needs no change plz dont mess with this
*/

function filter(name)
{
	count=0;
	var word="";
	nameArray.length = 0;

	for(var i=0;i<name.length;i++)
	{
		if(name.charAt(i) == '*')
		{
			nameArray.push(word);
			count++;
			word = "";
		}
		else
			word += name.charAt(i);
	}
}

function name_call()
{
	var course = document.getElementById("course").value;
	var semester = document.getElementById("semester").value;
	var branch = document.getElementById("branch").value;

	var xhr = new XMLHttpRequest();
	var x = "&course="+course+"&semester="+semester+"&branch="+branch;
	xhr.open('POST','/hostel-attendance-system/php/studName.php?'+x,true);
	xhr.onreadystatechange = function()
	{
	  	if(xhr.readyState==4 && xhr.status==200)
	  	{
	   	 	var name = xhr.responseText;
	   	 	filter(name);
	  	}
	}
	xhr.send(x);
}