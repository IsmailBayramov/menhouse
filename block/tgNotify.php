<?php
function sendTelegramMessage($text) {
    $chat_id = array(923848933 , 574336726 );
    $token = "6909433999:AAHGPMIFzEgDRmRWhkz6AnnsA0bD68tvkso";
    
    for ($i=0; $i < count($chat_id) + 1; $i++) { 
        // Отправка запроса
        $params = [
            'chat_id' => $chat_id[$i],
            'text' => $text
        ];
        
        $url = "https://api.telegram.org/bot$token/sendMessage?" . http_build_query($params);
        $result = file_get_contents($url);
  }
}
?>