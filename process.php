<?php

//configurazione prod
$smtp_server = 'smtp.francescopaoli.com';
$username = '2933995@aruba.it';
$password = 'cun2ax4j';
//$target_email = "info@francescopaoli.com";

//configurazione dev
//$smtp_server = 'mail.marcovenanzi.com';
//$username = 'hi@marcovenanzi.com';
//$password = 'benebene';
$target_email = "marcovena@libero.it";


//testo e campi statici mail
$subject = "Richiesta informazioni - www.francescopaoli.com";

 

//enable debug
$DEBUG = 0;

if($DEBUG) {
    error_reporting(E_ALL);
}

if(isset($_POST['submit'])) {

    $name_field = trim($_POST['name']);
    $email_field = trim($_POST['email']);
    $website = trim($_POST['web']);

    $msg = trim($_POST['text']);

    
    echo 'Validation start';
    //validate name
    if(empty($name_field)) {
        $hasError = true;
        echo 'Name field is empty';
    } else {
        $name_field_san = $name_field;
    }

    //validate email
    if(empty($email_field)) {
        $hasError = true;
        echo 'Mail field is empty';
    } elseif(0 == preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email_field)) {
        $hasError = true;
        echo 'There is an error in the mail formatting: , $email_field';
    } else {
        $email_san = $email_field;
    }

    //validate msg
    if(empty($msg)) {
        $hasError = true;
        echo 'Mail Body is empty';
    }

    if(!isset($hasError) || $hasError == false) {
        
        $body = "<strong>From: </strong> $name_field_san </br> <strong>E-Mail:</strong> $email_san </br> 
            <strong>Sito Web: </strong> $website </br> <strong>Messaggio: </strong>$msg </br>";

        if($DEBUG) {
                var_dump($body);
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
        $message = Swift_Message::newInstance($subject) -> setFrom(array($email_san => $name_field_san)) -> setTo(array($target_email => 'Francesco Paoli Photography')) -> setBody($body) -> setContentType("text/html");

        //Send the message
        $result = $mailer -> send($message);
        echo 'Sent mail';
        if($DEBUG) {
            echo "Email Result: $result";
        }
        return $result;
    }else {
        echo "<h6> Attenzione! Campi non validi. Ricontrollare il form.</h6>";
    }
} else {
    echo "Errore. Riprovare.";
}
?>