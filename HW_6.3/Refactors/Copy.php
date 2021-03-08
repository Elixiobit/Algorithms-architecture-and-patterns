<?php


class Copy extends Operation
{
    public String $nameOperation = "Копирование";

    public function operation(string $filename): String
    {
        return file_get_contents($filename, false, null, 20,300);

    }

    public function getOperation(): string
    {
        return $this->nameOperation;
    }

}

