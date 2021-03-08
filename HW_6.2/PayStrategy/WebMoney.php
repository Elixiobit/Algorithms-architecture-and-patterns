<?php


class WebMoney implements IPayment
{
    private $webMoney = 'WebMoney';

    public function requestPayment(int $totalCost, int $telephoneNumber)
    {
        echo $this->webMoney . PHP_EOL;
        echo "идет обработка оплатына сумму $totalCost" . PHP_EOL;
        echo "оплата проведена чек пройдет по номеру телефона $telephoneNumber" . PHP_EOL;
    }
}