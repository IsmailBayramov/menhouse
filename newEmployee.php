<?php
require './block/tgNotify.php';

sendTelegramMessage("Новая заявка на работу\nОт: " .  $_POST['name'] . "\nНомер телефона: " . $_POST['tel'] . "\nЖелаемая работа: " . $_POST['vacancy'] );
header("Location: ./". $_POST['page']. ".php?d=1");


?>