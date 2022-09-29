<?php
namespace Pdp\Creational\Builder;

require __DIR__ . '/../../../vendor/autoload.php';

$pizzaRecipe = (new PizzaBuilder(9))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();


$order = new Pizza($pizzaRecipe);
echo $order->show();