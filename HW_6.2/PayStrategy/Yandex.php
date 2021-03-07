<?php


class Yandex implements IPayment
{
    private $yandex = 'Яндекс';

    public function requestPayment(int $totalCost, int $telephoneNumber)
    {
        echo $this->yandex . PHP_EOL;
        echo "идет обработка оплатына сумму $totalCost" . PHP_EOL;
        echo "оплата проведена чек пройдет по номеру телефона $telephoneNumber" . PHP_EOL;
    }
}