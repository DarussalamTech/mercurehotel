<?php

//send email action here
require_once('phpmailer/class.phpmailer.php');
define("admin_email", "reservations@mercurevaluehotel.com");
define("admin_name", "Reservation Mercure");
define("smtp_host", "smtp.gmail.com");
define("smtp_user", "mercurevaluehotel457@gmail.com");
define("smtp_pass", "abc123AB");
define("smtp_secure", "ssl");
define("smtp_port", "465");
define("allowed_host_1", "localhost");
define("allowed_host_2", "54.244.125.63");

$user_reply_body = "Thank you for making reservation on us " .
        " possbile and reply you immediately <br/> Thanks and Regards <br/>" .
        " Mercure Value Hotel.";

$add_addresses = array("info@dtechsystems.co.uk", "reservations@mercurevaluehotel.com");


//email_sent

if (
        (strstr($_SERVER['HTTP_HOST'], allowed_host_1) || strstr($_SERVER['HTTP_HOST'], allowed_host_2)) &&
        isset($_POST['name'])
) {

    $mail = new PHPMailer();


    if (!strstr($_SERVER['HTTP_HOST'], allowed_host_2)) {
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = smtp_host; // SMTP server
        $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->Host = smtp_host; // sets the SMTP server
        $mail->Port = smtp_port;                    // set the SMTP port for the GMAIL server
        $mail->Username = smtp_user; // SMTP account username
        $mail->Password = smtp_pass;        // SMTP account password
        $mail->SMTPSecure = smtp_secure;
    }


    $mail->SetFrom($_POST['email'], $_POST['name']);

    $mail->AddReplyTo($_POST['email'], $_POST['name']);

    $mail->Subject = "Reservation from " . $_POST['name'];

    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail->MsgHTML($_POST['message']);


    if (is_array($add_addresses)) {
        foreach ($add_addresses as $email) {
            if (!empty($email)) {
                $mail->AddAddress($email, admin_name);
            }
        }
    } else {
        $mail->AddAddress(admin_email, admin_name);
    }


    if (!$mail->Send()) {
        //echo "Mailer Error: to admin " . $mail->ErrorInfo;
    } else {
   
        //sending customer reply
        $mail = new PHPMailer();

        if (!strstr($_SERVER['HTTP_HOST'], allowed_host_2)) {
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = smtp_host; // SMTP server
            $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->Host = smtp_host; // sets the SMTP server
            $mail->Port = smtp_port;                    // set the SMTP port for the GMAIL server
            $mail->Username = smtp_user; // SMTP account username
            $mail->Password = smtp_pass;        // SMTP account password
            $mail->SMTPSecure = smtp_secure;
        }

        $mail->SetFrom("no_reply@mercurevaluehotel.com", "No Reply");

        $mail->AddReplyTo("no_reply@mercurevaluehotel.com", "No Reply");

        $mail->Subject = "Reply From Mercure Value Hotel";

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail->MsgHTML($user_reply_body);
        echo $_POST['email'];

        $mail->AddAddress($_POST['email'], $_POST['name']);


        if (!$mail->Send()) {
            //echo "Mailer Error to user: " . $mail->ErrorInfo;
        } else {
           // echo "Message sent!";
        }
  
    }

    session_start();
    $_SESSION['message'] = "Your enquiry has been recieved";

    //send message to user that his or her email has been recieved
}

header('Location: reservation.php');
//sen
?>