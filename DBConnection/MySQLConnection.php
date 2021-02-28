<?php


class MySQLConnection extends DBConnection
{

    private $config = [
        'driver' => 'MySQL',
    ];

    private $connection = null;

    public function getConnection()
    {
        echo 'проверяем на наличие уже существующего соединения c BD'  . PHP_EOL;
        echo $this->connection  = 'Ok' . PHP_EOL;
    }

}