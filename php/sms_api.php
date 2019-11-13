<?php
    include 'dbConnect.php';

//    $date = $_GET['date'];
    $sms_arrt = "SELECT s.name, h.remarks, h.adm_no FROM hostel_attendance_details h INNER JOIN hostel_details s ON s.adm_no=h.adm_no WHERE date_id IN (SELECT si_no FROM hostel_date_details where date='2019-11-13')";
    
    //echo $sms_arrt."<br><br>";
        $res = mysql_query($sms_arrt);
    //    echo mysql_fetch_array($res)[0];

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
    $message = "Dear Parent, Your child #Jerin# was absent at the college hostel on #13-11-2019#. For more details check #google#.";  //ITHUM MATTANAM, BUT ONLY AFTER WE SUBSCRIBE
    $enc_msg= rawurlencode($message); // Encoded message

    //Create API URL
    $fullapiurl="http://smsc.biz/httpapi/send?username=$username&password=$password&sender_id=$approved_senderid&route=T&phonenumber=$mob_number&message=$enc_msg"; //DO NOT TOUCH

// http://smsc.biz/httpapi/send?username=adityavishnu3610@gmail.com&password=justtesting&sender_id=SMSIND&route=T&phonenumber=9947189437&message=Dear%20Parent%2C%0D%0AYour%20child%20%23field1%23%20was%20absent%20at%20the%20college%20hostel%20on%20%23field2%23.%20For%20more%20details%20check%20%23field3%23.

    //Call API
    $ch = curl_init($fullapiurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    //echo $result ; // For Report or Code Check
    curl_close($ch);

    echo "SMS Send avendiyadhanu";
?>