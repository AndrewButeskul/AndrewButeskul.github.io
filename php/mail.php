<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$question = $_POST['user_question'];

$subject = "=?-8B?".base64_decode("Сообщение с сайта!")."?="; 
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text-html; charset=utf-8\r\n"; 

$success = mail("and.butes@gmail.com", $subject, $name, $email, $question, $headers);
?>