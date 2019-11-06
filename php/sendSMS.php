<?php include 'session.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Send SMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/tabStyle.css">
        <link rel="stylesheet" type="text/css" href="../css/divTab.css?v=3">
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <style type="text/css">
            /* Define Style */
            *{
                margin: 10;
                padding: 10;
                transition: .5s;
            }
            #main{
                margin-top: 20vh;
            }
            .control-box{
                border-style: solid;
                border-width: thin;
                border-radius: 10px;
                margin-top: 50%;
                width: 60%;
                margin: 0px auto;
            }
            .control-box-title{
                height: 10vh;
                background-color: black;
                border-radius: 10px 10px 0px 0px;
            }
            .date,.selective{
                background-color: lightgray;
                margin: 0px;
                float: left;
                width: 50%;
                text-align: center;
                height: 7vh;
                font-size: 2vw;
                border: solid 1px; 
            }
            .date:hover,.selective:hover{
                transform: scale(1.05);
                transition: .5s;
            }
            button::onhover{
                background-color: red;
            }
            .option{
                font-size: 1.5vw;
                padding: 20px;
                text-align: center;
                margin-top: 4vh;
            }
            .button{
                font-size: 1.5vw;
                width: auto;
                padding: 5px 15px;
                border-radius :5px;
                border: none;
                margin-left: 15px;
            }
            #loader{
                display: none;
                margin: 0px auto;
            }
        </style>
    </head>
    <body>
        <?php include 'sidebarAdmin.php' ?>

        <!-- To HighLight in SideBar -->
        <input type="text" value="1" id="display" style="display: none">
        <script type="text/javascript"> focusSidebar(); </script>

        <div id="main">
            <div class="control-box">
                <div class="control-box-title">
                    <h3 style="padding: 15px; margin: 0px; color: white; text-align: center">Send SMS</h3>
                </div>
                <div class="sub-options">
                        <button class="date">Date</button>
                        <button class="selective">Selective SMS</button>
                        <div></div>
                    </div>
                <div class="option" id="options">
                    <p>Select Date:   <input type="date" name="date" class="input" value="<?php echo date('Y-m-d'); ?>"></p>
                    <button class="button">View Records</button>
                    <button class="button" onclick="loading()">Send Now</button>
                </div>
                <div><img id="loader" src="https://media.giphy.com/media/3o85xL92eSa9LoGPYs/giphy.gif"></div>
                <div id="confirmation" style="text-align: center; color: green; display: none"><h2>SMS Sent Successfully</h2></div>
                <script>
                    function loading(){
                        document.getElementById("options").style.display = "none";
                        document.getElementById("loader").style.display = "block";
                        document.getElementById("confirmation").style.display = "none";
                        setTimeout(showConfirmation,3200);
                    }
                    function showConfirmation(){
                        document.getElementById("options").style.display = "none";
                        document.getElementById("loader").style.display = "none";
                        document.getElementById("confirmation").style.display = "block";
                        setTimeout(showAfterLoading,1000);
                    }
                    function showAfterLoading(){
                        document.getElementById("options").style.display = "block";
                        document.getElementById("loader").style.display = "none";
                        document.getElementById("confirmation").style.display = "none";
                    }
                </script>
            </div>
        </div>
    </body>
</html>