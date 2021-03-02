<?php


class SquareAdapter implements ISquare
{
    private $squareAreaLib;

    public function __construct($squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    private function getDiagonal(float $sideSquare)
    {
        return sqrt(($sideSquare ** 2) * 2);
    }

    function squareArea(float $sideSquare)
    {

        $area = $this->squareAreaLib->getSquareArea($this->getDiagonal($sideSquare));

        return $area;
    }
}