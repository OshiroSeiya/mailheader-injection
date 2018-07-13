<?php
$to      = 'example@example.com';
$subject = 'タイトル';
$message = '本文';
$headers = 'From: example@example.com' . "\r\n";

mb_send_mail($to, $subject, $message, $headers);
