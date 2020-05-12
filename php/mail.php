<?php

$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта!")."?="; 
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text-html; charset=utf-8\r\n"; 

$success = mail("and.butes@gmail.com", $subject, $name, $email, $question, $headers);
?>