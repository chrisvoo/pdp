<?php

namespace Pdp\SimpleFactory;

require __DIR__ . '/../../vendor/autoload.php';

$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo "\n";

require_once('Email.php');
$email = NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();