<?php



    if (isset($_POST['form'])) :
        parse_str($_POST['form'], $output);
        $email = $output['email'];
        $mail_admin = 'contact@crafter.co.in';
        $mail_user = $email;
        $mail_message = '<div style="border: 1px solid #000; padding: 50px 20px; background-color: #b0bec5; border-radius: 15px;">';
        $mail_message .= '<h2 style="color:#214e7b">Send from Crafter Subscribe Form</h2></br>';
        $mail_message .= '<p>Email : '.$email.'</p> </br>';
        $mail_message .= '</div>';
        $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        mail($mail_admin, 'Form message', $mail_message, $headers); // send to admin
        mail($mail_user, 'Form message', $mail_message, $headers); // send to user
    endif;

    die();