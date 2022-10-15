<?php
/**
 * User: Junade Ali
 * Date: 09/04/2016
 * Time: 19:02
 */

namespace Pdp\Structural\Adapter\ClassAdapter;

require __DIR__ . '/../../../../vendor/autoload.php';

$atm = new ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance();
echo "\n";

$adaptedATM = new ATMWithPhoneTopUp(500.00);
echo "Top-up code: " . $adaptedATM->getTopUp(50, time());
echo "\n";
echo $adaptedATM->getBalance();