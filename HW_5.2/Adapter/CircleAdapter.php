<?php


class CircleAdapter implements ICircle
{
    private $circleAreaLib;


    public function __construct($circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    private function getDiameter(float $circumference): float
    {
        return $circumference / M_PI;
    }

    public function circleArea(float $circumference): float
    {
         return $this->circleAreaLib->getCircleArea($this->getDiameter($circumference));
    }
}