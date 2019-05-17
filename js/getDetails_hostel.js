function hostelGetDetails()
{
	var target = document.getElementById('getDetails');
	var hostel_code = document.getElementById('hostelno').value;
	var floor_no = document.getElementById('floorno').value;
	var room_no = document.getElementById('roomno').value;
	var date = document.getElementById('myDate').value;
	console.log(date);

	var xhr = new XMLHttpRequest();
	var x = "&hostelno="+hostel_code+"&floorno="+floor_no+"&roomno="+room_no+"&date="+date;

	xhr.open('GET','../php/getDetails_hostel.php?'+x,true);

	xhr.onreadystatechange = function()
	{
		if(xhr.readyState==4 && xhr.status==200)
		{
			target.innerHTML = xhr.responseText;
		}
	}
	xhr.send(x);
}