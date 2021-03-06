<?php


interface IUserObserver
{
    public function startSearch(): void;
    public function endSearch(): void;
    public function sendEmail(String $nameVacancy): void;
}