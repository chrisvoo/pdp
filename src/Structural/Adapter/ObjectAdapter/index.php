<?php
namespace Pdp\Structural\Adapter\ObjectAdapter;

require __DIR__ . '/../../../../vendor/autoload.php';

$quote = new Insurance(10000, 250);
echo $quote->monthlyPremium();
echo "\n";

$quote = new InsuranceMarketCompare(10000, 250);
echo $quote->getMonthlyPremium();
echo "\n";
echo $quote->getAnnualPremium();