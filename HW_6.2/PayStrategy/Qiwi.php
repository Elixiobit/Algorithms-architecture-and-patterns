<?php


class Qiwi implements IPayment
{
    private $qiwi = 'Qiwi';

    public function requestPayment(int $totalCost, int $telephoneNumber)
    {
        echo $this->qiwi . PHP_EOL;
        echo "идет обработка оплатына сумму $totalCost" . PHP_EOL;
        echo "оплата проведена чек пройдет по номеру телефона $telephoneNumber" . PHP_EOL;
    }
}