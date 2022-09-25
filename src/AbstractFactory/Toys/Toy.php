<?php

namespace Pdp\AbstractFactory\Toys;

abstract class Toy
{
    abstract public function getSize(): int;
    abstract public function getPictureName(): string;
}