<?php
function sendTelegramMessage($text) {
    $chat_id = [574336726];
    $token = "6400278220:AAHsn7ug167EsAlauSKwtDmBE01P-QjqcN8";
    for ($i=0; $i < count($chat_id); $i++) { 
        // Отправка запроса
        $params = [
            'chat_id' => $chat_id[$i],
            'text' => $text
        ];
        
        $url = "https://api.telegram.org/bot$token/sendMessage?" . http_build_query($params);
        $result = file_get_contents($url);
    
        // Результат
        if ($result) {  
            return "Ok";
        } else {
            return "Error";
        }
  }
}
?>