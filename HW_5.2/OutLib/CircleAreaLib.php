<?php

class CircleAreaLib
{
    public function getCircleArea(float $diameter)
    {
        $area = (M_PI * $diameter ** 2) / 4;

       return $area;
   }
}
