<?php
    if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $message = $_POST['message'];

    $email_body = "New message from: "$email_from."\n".
                  "Username: "$name."\n".
                  "Message: "$message;

    $to = "elmir.ahadov@yahoo.com";

    $headers = "From: ".$email_from;

    mail($to, $headers, $email_body);
    header("Location: index.html");
    }
?>