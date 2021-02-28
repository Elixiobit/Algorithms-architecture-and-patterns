<?php

class WorkWithPostgreSQL extends DB
{
    protected function createConnectionDB()
    {
        echo 'подключаемся к базе' . PHP_EOL;
        echo PostgreSQLConnection::getInstance()->getConnection();
    }

    protected function createDBRecord(): DBRecord
    {
        echo 'record к базе PostgreSQL';
        return new PostgreSQLRecord();
    }
}