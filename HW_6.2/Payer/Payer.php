<?php


class Payer
{
    private int $totalCost;
    private  int $telephoneNumber;

    public function __construct(int $totalCost, int $telephoneNumber)
    {
        $this->totalCost = $totalCost;
        $this->telephoneNumber = $telephoneNumber;
    }

    public function payment(IPayment $paymentMethod)
    {
        $paymentMethod->requestPayment($this->totalCost, $this->telephoneNumber);
    }

}