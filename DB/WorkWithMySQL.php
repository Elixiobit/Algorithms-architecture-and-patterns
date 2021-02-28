<?php


class WorkWithMySQL extends DB
{
    protected function createConnectionDB()
    {
        echo 'подключаемся к базе MySQL' . PHP_EOL;
        return MySQLConnection::getInstance()->getConnection();
    }


    protected function createDBRecord(): DBRecord
    {
        echo 'record к базе MySQL';
        return new MySQLRecord();
    }
}