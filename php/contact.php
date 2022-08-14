<?php
    $name = $_POST['name'];
    $visitor_phone = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'dubeyamit.1920@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                    "Email: $visitor_email , Phone: $visitor_phone. \n"
                            "Here is the message:\n $message".


?>