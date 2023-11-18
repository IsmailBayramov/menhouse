<?php
require './block/tgNotify.php';

sendTelegramMessage("Клиент вызывает такси\nНомер:" .  $_POST['phone'] . "\n Адрес:" .  $_POST['address']);
header("Location: ./". $_POST['page']. ".php?d=0");


?>