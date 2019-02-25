<?php

$firsName = $_POST["fName"];
$lastName = $_POST["lName"];
$from = $_POST["email"];
$country = $_POST["country"];
$message = $_POST["message"];

if ( $firsName && $lastName && $from && $country && $message ) {

    $to = "yourmail@yourdomain";
    $emailheader = "From: Your custom header <yourmail>";

    $subject = "Your Subject";

    $message .= "Form:"."\n";
    $message .= "Name: " . $firsName ."\n";
    $message .= "Last Name: " . $lastName ."\n";
    $message .= "E-mail: " . $from ."\n";
    $message .= "Country: " . $country ."\n";
    $message .= "Message: " . $message ."\n";

    mail($to, $subject, $message, $emailheader) or die ("Sorry, your request has not been sent.<br/>Try again.");

    echo "Your query has been sent correctly.";

} else if ( empty($firsName) || empty($lastName) || empty($from) || empty($country) || empty($message) ) {
    echo "Please, fill in all the fields correctly.";
    exit;
}

?>