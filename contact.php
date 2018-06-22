<?php

$to = 'contact@lacreativetech.com';
$from = 'contact@lacreativetech.com';
$subject = 'Contact Form';
$headers =
    'Return-Path: ' . $from . "\r\n" .
    'From: ' . $from . "\r\n" .
    'X-Priority: 3' . "\r\n" .
    'X-Mailer: PHP ' . phpversion() . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Transfer-Encoding: 8bit' . "\r\n" .
    'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $from;

if( isset( $_POST[ "name" ] ) && isset( $_POST[ "email" ] ) && isset( $_POST[ "message" ] ) )
{
    $content = "Name: " . $_POST[ "name" ] . "\r\n";
    $content .= "Email: " . $_POST[ "email" ] . "\r\n";
    $content .= "Message: " . "\r\n" . $_POST[ "message" ];

    if( mail( $to, $subject, $content, $headers, $params ) )
    {
        echo json_encode( array( "sendstatus" => 1, "message" => "Thank you for contacting Us! We'll be in touch." ) );
    }
    else
    {
        echo json_encode( array( "sendstatus" => 0, "message" => "Something went wrong, please try again later." ) );
    }
}

?>