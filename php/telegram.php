<?php

/* https://api.telegram.org/bot1216515614:AAE82oHwmNICkdESeI8LEN3dj_ej3nq-mGY/getUpdates */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$question = $_POST['user_question'];
$token = "1216515614:AAE82oHwmNICkdESeI8LEN3dj_ej3nq-mGY";
$chat_id = "-435863529";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $email,
  'Email' => $question
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Вопрос успешно отправлен!";;
} else {
  echo "Error";
}
?>