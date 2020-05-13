<?php

$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
$token = "1216515614:AAE82oHwmNICkdESeI8LEN3dj_ej3nq-mGY";
$chat_id = "-435863529";

$message = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email
);

foreach($message as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	echo "Успешно отправлено!";
} else {
  echo "Error";
}
?>