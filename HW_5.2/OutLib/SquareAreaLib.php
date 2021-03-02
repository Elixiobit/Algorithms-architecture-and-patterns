<?php


class SquareAreaLib
{
    public function getSquareArea(float $diagonal): float //площадь квадрата
    {
        $area = ($diagonal ** 2) / 2;

        return $area;
    }
}