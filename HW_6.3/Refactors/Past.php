<?php


class Past extends Operation
{
    public String $nameOperation = "Вставить";

    public function operation(string $text)
    {

    }

    public function getOperation(): String
    {
        return $this->nameOperation;
    }
}