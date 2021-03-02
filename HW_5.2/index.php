<?php
include 'Autoload.php';

$sideSquare = 6.2; // сторона квадрата
$squareArea = (new SquareAdapter(new SquareAreaLib()));
echo 'Площадь квадрата = ' . $squareArea->squareArea($sideSquare) . PHP_EOL;

$circumference = 25; // длина окружности
$circleArea = (new CircleAdapter(new CircleAreaLib()));
echo 'Площадь круга = ' . $circleArea->circleArea($circumference) . PHP_EOL;

