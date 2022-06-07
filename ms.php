<? 


$name = $_POST['name']
$email = $_POST['email']
$txt = $_POST['txt']







function parser($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if($result == false){     
      echo "Ошибка отправки запроса: " . curl_error($curl);
      return false;
    }
    else{
      return true;
    }
}


  $message .="Ново";
  $message .="Ново"name;
  $message .="Ново"email;
  $message .="Ново"txt;






function orderSendTelegram($message) {

    /*токен который выдаётся при регистрации бота */
    $token = "5336597210:AAGRhrjrr2HaLT-H7EsRyWZQOJencrKurXQ";
    /*идентификатор группы*/
    $chat_id = "-711696534";

    /*делаем запрос*/
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");

}
?>

https://api.telegram.org/bot5336597210:AAGRhrjrr2HaLT-H7EsRyWZQOJencrKurXQ/getUpdates