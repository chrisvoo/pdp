<?php

namespace Pdp\AbstractFactory;

use Pdp\AbstractFactory\Toys\MazeToy;
use Pdp\AbstractFactory\Toys\PuzzleToy;
use Pdp\AbstractFactory\Toys\SFMazeToy;
use Pdp\AbstractFactory\Toys\SFPuzzleToy;

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 04:39
 */
class SFToyFactory implements ToyFactory
{
    private $location = "San Francisco";

    public function makeMaze(): MazeToy
    {
        return new SFMazeToy();
    }

    public function makePuzzle(): PuzzleToy
    {
        return new SFPuzzleToy();
    }
}