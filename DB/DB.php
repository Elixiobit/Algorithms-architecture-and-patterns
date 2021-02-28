<?php


abstract class DB
{
    private $dbConnection;
    private DBRecord $dbRecord;


    /**
     * DB constructor.
     * @param $dbConnection
     */
    public function __construct()
    {
        $this->dbConnection = $this->createConnectionDB();
        $this->dbRecord = $this->createDBRecord();

    }

    public function startWorkingDB()
    {
        echo $this->dbConnection . PHP_EOL;
        $this->dbRecord->getById() . PHP_EOL;
        $this->dbRecord->getALl() . PHP_EOL;
        echo 'end' . PHP_EOL;

    }


    abstract protected function createConnectionDB();

    abstract protected function createDBRecord(): DBRecord;


}