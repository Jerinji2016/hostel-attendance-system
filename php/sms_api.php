<?php
    include 'dbConnect.php';
    $var_sql = "SELECT username, password FROM sms_auth WHERE name='Aditya'";
    $result = mysql_query($var_sql);
    $row = mysql_fetch_array($result);
    //API Details
    $username =$row[0];
    $password =$row[1];

    $mob_number="7012788627";
    // Sender ID
    //Add a comment to this line
    $approved_senderid="SMSIND";  //CASH PAY CHEYYUMBOL NAMMAKKU ORU SENDER ID AVAR THARUM, ATHU NAMMAL IVIDE ENTER CHEYYANAM INSTEAD OF "SMSIND"

    //Approved Template
    $message = "Test sms from #Thangalde magan hostelil illadhe evideyo thendi nadakkua...#. Thanks for choosing our service - #- 7Dev, MBCCET# - SMSC Platform";  //ITHUM MATTANAM, BUT ONLY AFTER WE SUBSCRIBE
    $enc_msg= rawurlencode($message); // Encoded message

    //Create API URL
    $fullapiurl="http://smsc.biz/httpapi/send?username=$username&password=$password&sender_id=$approved_senderid&route=T&phonenumber=$mob_number&message=$enc_msg"; //DO NOT TOUCH

    //Call API
    $ch = curl_init($fullapiurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    //echo $result ; // For Report or Code Check
    curl_close($ch);

    echo "SMS Send avendiyadhanu";
?>