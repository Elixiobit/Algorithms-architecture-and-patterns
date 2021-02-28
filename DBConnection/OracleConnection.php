<?php


class OracleConnection extends DBConnection
{

    private $config = [
        'driver' => 'Oracle',
    ];

    private $connection = null;

    public function getConnection()
    {
        echo'проверяем на наличие уже существующего соединения c BD' . PHP_EOL;
        echo $this->connection = 'Ok' . PHP_EOL;
    }
}