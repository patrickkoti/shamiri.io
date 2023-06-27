<?php

    $N=$_POST['Name'];
    $E=$_POST['Email'];
    $P=$_POST['Number'];
    $B=$_POST['date'];
    $A=$_POST['Destination'];
    $C=$_POST['Guests'];
  

    $From ="<info@shamiritours.com>";
    $To = "<dennysmycall@gmail.com>";
    $Subject = "Registration of Safari ";
    $recipients = "dennysmycall@gmail.com";
    $mailmsg = "Name: ".$N."\nDestination: ".$A."\nNo of Guests: ".$C. "\nEmail Address: ".$E. "\nDate : ".$B."\nphone Number: ".$P;

    $headers["From"] = $From;
    $headers["To"] = $To;
    $headers["Subject"] = $subject;
    $headers["Reply-To"] = "info@shamiritours.com";
    $headers["Return-path"] = "info@shamiritours.com";
    
    $smtpinfo["host"] = "mail.shamiritours.com";
    $smtpinfo["port"] = "465";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "info@shamiritours.com";
    $smtpinfo["password"] = "Microsecure69";

    $mail_object =& Mail::factory("smtp", $smtpinfo);

    $mail_object->send($recipients, $headers, $mailmsg);
?>