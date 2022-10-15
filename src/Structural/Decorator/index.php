<?php
namespace Pdp\Structural\Decorator;

require __DIR__ . '/../../../vendor/autoload.php';

$PHPBook = new PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");
echo $PHPBook->getText();