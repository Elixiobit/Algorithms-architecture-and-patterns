<?php


class WorkWithOracle extends DB
{
    protected function createConnectionDB()
    {
        echo 'подключаемся к базе Oracle' . PHP_EOL;
        echo OracleConnection::getInstance()->getConnection();
    }

    protected function createDBRecord(): DBRecord
    {
        echo 'record к базе Oracle';
        return new OracleRecord();
    }
}