<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = $_REQUEST['email'];

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe to newsletter";

# RESULT PAGE
$location = "Regalo Amore newletter subscription";

## FORM VALUES ##

$sender = "regalo.amore007@gmail.com";

# MAIL BODY
$body .= "Congratulations! Your email id ".$_REQUEST['email']." is now added to our mailing list.\n";
$body .= "We will send you occasional emails regarding latest news on product launches and more.\n";
$body .= "Thank you for trusting in us."

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
