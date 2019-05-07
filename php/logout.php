<?php
	session_start();
	if(session_destroy())
	{ // Destroying All Sessions
		header("Location: ../login.html"); // Redirecting To Home Page
	}
?>

<script type="text/javascript">
	alert("Logged Out");
</script>
