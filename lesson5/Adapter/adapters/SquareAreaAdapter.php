<?php
namespace lesson5\Adapter\adapters;

use lesson5\Adapter\interfaces\ISquare;
use lesson5\Adapter\external_library\SquareAreaLib;

class SquareAreaAdapter implements ISquare{
    protected $squareArea;
    public function __construct(SquareAreaLib $squareArea) {
        $this->squareArea = $squareArea;
    }

    public function squareArea(float $sideSquare)
    {
        $diagonal = sqrt(2 * $sideSquare ** 2);
        $area = $this->squareArea->getSquareArea($diagonal);
        return $area;
    }
}