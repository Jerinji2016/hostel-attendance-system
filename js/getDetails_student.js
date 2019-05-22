function studGetDetails()
{
	var target = document.getElementById('getDetails');
	var course = document.getElementById('course').value;
	var semester = document.getElementById('semester').value;
	var branch = document.getElementById('branch').value;
	var s_name = document.getElementById('s_name').value;
	hide_HAS();

	var xhr = new XMLHttpRequest();
	var x = "&course="+course+"&semester="+semester+"&branch="+branch+"&s_name="+s_name;

	xhr.open('GET','../php/getDetails_student.php?'+x,true);

	xhr.onreadystatechange = function()
	{
		if(xhr.readyState==4 && xhr.status==200)
		{
			target.innerHTML = xhr.responseText;
		}
	}
	xhr.send(x);
}