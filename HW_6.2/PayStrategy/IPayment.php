<?php


interface IPayment
{
    public function requestPayment(int $totalCost, int $telephoneNumber);

}