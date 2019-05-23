<style type="text/css">
    .sidebar 
    {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
    .sidebar a 
    {
        text-align: left;
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidebar a:hover 
    {
        color: #F1F1F1;
    }
    .openbtn 
    {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
    }
    .openbtn:hover 
    {
        background-color: #444;
    }
    #main 
    {
        transition: margin-left .5s;
        padding: 16px;
    }
    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) 
    {
        .sidebar {
            padding-top: 15px;
        }
        .sidebar a {
            font-size: 18px;
        }
    }
</style>

<div style="width: 100%" align="right">  <!--div for logout button-->
	<div id="navButton" align="left" style="transition: margin-left .5s">
		<button class="openbtn" onclick="openNav()" style="align">☰ </button>
	</div>
    <form action="logout.php" method="post">
    	<div style="margin-right: 20px">
    		Logged In As: <b> 
            <?php 
                session_start();
                echo $_SESSION['userid']; 
            ?> 
            &nbsp; </b>
       	 	<button type="submit" value="logout">Logout</button>
    	</div>
    </form>
</div>

<div id="adminBar" class="sidebar">
	<a id="attend_option" style="color: #F1F1F1" href="#"> 
		Attendance 
	</a>
	<a id="view_option" href="#"> View Record </a>
	<a id="leave_option" href="#"> Leave Request </a>
</div>

<script type="text/javascript">
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
</script>