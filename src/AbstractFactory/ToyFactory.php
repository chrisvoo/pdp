<?php

namespace Pdp\AbstractFactory;

use Pdp\AbstractFactory\Toys\MazeToy;
use Pdp\AbstractFactory\Toys\PuzzleToy;

/**
 * User: Junade Ali
 * Date: 12/03/2016
 * Time: 08:34
 */
interface ToyFactory {
    function makeMaze(): MazeToy;
    function makePuzzle(): PuzzleToy;
}