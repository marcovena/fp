<?php

$DEBUG = 0;

if($DEBUG) {
    echo "email: $email \n $message \n $target_email";
}

if(isset($_POST['submit'])) {

//need to validate 

    $smtp_server = 'smtp.francescopaoli.com';
    $username='2933995@aruba.it';
    
    $password = 'cun2ax4j';

    $name_field = trim($_POST['name']);
    $email_field = trim($_POST['email']);
    $website = trim($_POST['web']);
    
    $subject = "Richiesta informazioni - www.francescopaoli.com";
    
//owner email
   // $target_email = "marcovena@libero.it";
    $target_email = "info@francescopaoli.com";

    $msg = trim($_POST['text']);

    //validate name
    if($name_field == ''){
        $hasError = true;
    }
     else {
        $name_field_san = $name_field;
    }
     
     //validate email
    if($email_field == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email_field)) {
        $hasError = true;
    } else
        {
            $email_san = $email_field;
        }

 //validate msg
    if($msg == '') {
        $hasError = true;
    }
    
    if(!isset($hasError)){

    $body = "<strong>From: </strong> $name_field_san </br> <strong>E-Mail:</strong> $email_san </br> 
            <strong>Sito Web: </strong> $website </br> <strong>Messaggio: </strong>$msg </br>";




    if($DEBUG) {
        echo "\n ending....";
    }
    //send email

    require_once 'lib/swiftmailer/lib/swift_required.php';
    
    if($DEBUG) {
        echo "Loaded swiftmailer library";
    }

    //Create the Transport
    
    $transport = Swift_SmtpTransport::newInstance($smtp_server, 25) -> setUsername($username) -> setPassword($password);

    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    //Create a message
    $message = Swift_Message::newInstance($subject) 
    -> setFrom( array($email_san => $name_field_san)) -> setTo( array($target_email => 'Francesco Paoli Photography')) -> setBody($body)
    -> setContentType("text/html");

    //Send the message
    $result = $mailer -> send($message);
    if($DEBUG) {
        echo "Email Result: $result";
    }
    return 1;
}
} else {
    echo "Error while sending email";
}
?>