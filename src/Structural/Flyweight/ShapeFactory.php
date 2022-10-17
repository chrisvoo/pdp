<?php

namespace Pdp\Structural\Flyweight;

class ShapeFactory
{
    private $shapeMap = [];

    public function getCircle(string $colour)
    {
        $circle = 'Circle' . '_' . $colour;

        if (!isset($this->shapeMap[$circle])) {
            echo "Creating a ".$colour." circle.";
            echo "\n";
            $this->shapeMap[$circle] = new Circle($colour);
        }

        return $this->shapeMap[$circle];
    }
}