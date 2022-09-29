<?php

namespace Pdp\AbstractFactory\Toys;

class UKMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = "London Maze";
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->pictureName;
    }
}