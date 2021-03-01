<?php

require 'Autoload.php';

$send = new Telegram(new Facebook());


$send->sendNotifications();