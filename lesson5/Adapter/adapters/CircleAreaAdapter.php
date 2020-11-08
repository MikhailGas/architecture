<?php
namespace lesson5\Adapter\adapters;

use lesson5\Adapter\external_library\CircleAreaLib;
use lesson5\Adapter\interfaces\ISquare;
use lesson5\Adapter\external_library\SquareAreaLib;
use lesson5\Adapter\interfaces\ICircle;

class CircleAreaAdapter implements ICircle{
    protected $circleArea;
    public function __construct(CircleAreaLib $circleArea) {
        $this->circleArea = $circleArea;
    }

    public function circleArea(float $circumference)
    {
        $diameter = $circumference/M_PI;
        $area = $this->circleArea->getCircleArea($diameter);
        return $area;
    }
}