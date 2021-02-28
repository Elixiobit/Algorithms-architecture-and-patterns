<?php


class PostgreSQLConnection extends DBConnection
{
    private $config = [
        'driver' => 'PostgreSQL',
    ];

    private $connection = null;

    public function getConnection()
    {
        echo'проверяем на наличие уже существующего соединения c BD' . PHP_EOL;
        echo $this->connection = 'Ok'. PHP_EOL;
    }
}