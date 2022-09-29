<?php

namespace Pdp\Creational\AbstractFactory;

use Pdp\AbstractFactory\Toys\MazeToy;
use Pdp\AbstractFactory\Toys\PuzzleToy;
use Pdp\AbstractFactory\Toys\UKMazeToy;
use Pdp\AbstractFactory\Toys\UKPuzzleToy;

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 04:34
 */
class UKToyFactory implements ToyFactory
{
    private $location = "United Kingdom";

    public function makeMaze(): MazeToy
    {
        return new UKMazeToy();
    }

    public function makePuzzle(): PuzzleToy
    {
        return new UKPuzzleToy();
    }
}