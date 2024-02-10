<?php

         $name = $_POST["name"];
         $subject = $_POST["subject"];
         $mailFrom = $_POST["email"];
         $message = $_POST["message"];
         $mailto = "pkb707307@gmail.com";
         $headers = "From: $mailFrom";
         $txt = "You have received an email from ".$name.".\n\n".$message;
        
         mail(  $mailto, $subject, $message, $headers);
            echo "Email Sent";     
?>