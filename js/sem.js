function sem()
	{
		var target=document.getElementById("sem_change");
		var course=document.getElementById("course").value;
		var x="&c="+course;
	
		var xhr=new XMLHttpRequest();
		xhr.open("GET","/hostel-attendance-system/php/semester.php?"+x,true);
		
		xhr.onreadystatechange = function()
		{
			if(xhr.readyState==4 && xhr.status==200)
			{
				target.innerHTML = xhr.responseText;
			}
		}
		xhr.send(x);
		name_call();
	}