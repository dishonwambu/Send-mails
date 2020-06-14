<?php

 $name = $_POST['email1'];
 $visitor_email = $_POST['email'];
 $message = $_POST['messages'];

   $email_from = "mail from: $email1";
   $email_subject = "new message";
   $email_body = "User email:$email1.\n".
                 "User Email: $visitor_email.\n".
                 "user Message: $message.\n";

    $to = "dishonwambu@gmail.com";
     $headers = "From; $email_from\r\n";
     $headers = "Reply- To: "$visitor_email\r\n";
     mail($to, $email_subject, $email_body, $headers);
     header ("Location : index.html");

?>