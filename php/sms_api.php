<?php
    include 'dbConnect.php';

//    $date = $_GET['date'];
    $sms_arrt = "SELECT s.name, h.remarks, h.adm_no FROM hostel_attendance_details h INNER JOIN hostel_details s ON s.adm_no=h.adm_no WHERE date_id IN (SELECT si_no FROM hostel_date_details where date='2019-11-13')";
    
    //echo $sms_arrt."<br><br>";
        $res = mysql_query($sms_arrt);
    //    echo mysql_fetch_array($res)[0];

    $var_sql = "SELECT username, password FROM sms_auth WHERE name='Jerin'";
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
    $message = "Test sms from aditya. Thanks for choosing our service - 13-112019 - SMSC Platform";  //ITHUM MATTANAM, BUT ONLY AFTER WE SUBSCRIBE
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