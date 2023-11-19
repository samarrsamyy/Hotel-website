<?php
$visitor_email =$_POST['email'];
$review=$_POST['review'];

$email_from='info@yourwebsite.com';

$email_body = "user Email :$visitor_email.\n".
               "user review : $review .\n";


$to ='20181101@fue.edu.eg';

mail($to,$email_body);

header("Location :contact.html");
?>