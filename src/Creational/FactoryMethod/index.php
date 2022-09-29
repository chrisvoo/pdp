<?php
/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 21:20
 */

namespace Pdp\Creational\FactoryMethod;

require __DIR__ . '/../../../vendor/autoload.php';

require_once('SMS.php');
$mobile = ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo "\n";

require_once('Email.php');
$email = ElectronicNotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();

echo "\n";

require_once('Post.php');
$post = CourierNotifierFactory::getNotifier("Post", "10 Downing Street, SW1A 2AA");
echo $post->sendNotification();