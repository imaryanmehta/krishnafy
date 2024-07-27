<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_number = $_POST['number'];
$question = $_POST['question'];

$email_from = 'info@sribhagavatam.com'

$email_subject = "New Question";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Number: $visitor_number.\n".
                "User Question: $question .\n";

$to = 'imaryanmehta@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: question.html");

?>