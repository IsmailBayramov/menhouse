<?php
require './block/tgNotify.php';

sendTelegramMessage("Новый комментарий\nОт: " .  $_POST['name'] . "\nКомментарий: " . $_POST['message']);


header("Location: ./". $_POST['page']. ".php?d=2");
?>