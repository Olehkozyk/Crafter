<?php

    if (isset($_POST['form'])) :
        parse_str($_POST['form'], $output);
        $name = $output['name'];
        $prof = $output['prof'];
        $city = $output['city'];
        $email = $output['email'];
        $phone = $output['phone'];
        $mail_admin = 'contact@crafter.co.in';
        $mail_user = $email;
        $mail_message = '<html><body>';
        $mail_message = '<div style="border: 1px solid #000; padding: 50px 20px; background-color: #b0bec5; border-radius: 15px;">';
        $mail_message .= '<h2  style="color:214e7b">Send from Crafter Contact Form</h2></br>';
        $mail_message .= '<p>Name : '.$name.'</p> </br>';
        $mail_message .= '<p>Profession : '.$prof.'</p> </br>';
        $mail_message .= '<p>City : '.$city.'</p></br>';
        $mail_message .= '<p>Email : '.$email.'</p> </br>';
        $mail_message .= '<p>Phone number : '.$phone.'</p>';
        $mail_message .= '</div>';
        $mail_message .= "</body></html>";
        $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        mail($mail_admin, 'Form message', $mail_message, $headers); // send to admin
        mail($mail_user, 'Form message', $mail_message, $headers); // send to user
    endif;

    die();