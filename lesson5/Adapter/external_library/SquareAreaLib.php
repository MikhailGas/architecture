<?php
namespace lesson5\Adapter\external_library;
class SquareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}