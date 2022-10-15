<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 20:05
 */

namespace Pdp\Creational\AbstractFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$sanFraciscoFactory = new SFToyFactory();
var_dump($sanFraciscoFactory->makeMaze());
echo "\n";
var_dump($sanFraciscoFactory->makePuzzle());
echo "\n";

$britishToyFactory = new UKToyFactory();
var_dump($britishToyFactory->makeMaze());
echo "\n";
var_dump($britishToyFactory->makePuzzle());
echo "\n";