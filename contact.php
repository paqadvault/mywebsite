<?php

if(isset($_POST['submit'])){
    $mail_to = 'enquiries@fijbrealestate.com'; // specify your email here

    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $phone = $_POST['phone'];
	$subject =$_POST['sub']
    $message = $_POST['message'];

    // Construct email subject
    $subject = 'Visitor from Paqadvault website ' . $name;

    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Phone: ' . $phone . "\r\n";
	 $body_message .= 'Subject: ' . $Subject . "\r\n";
    $body_message .= 'Message: ' . $message;

    // Construct email headers
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'contact.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator admin@admin.com');
        window.location = 'contact.html';
    </script>
    <?php
    }
	
	
	
	
}else{
	
	echo "empty";
	
	
}////////end isset
?>