<?php
require 'DB/DB.php';
require 'DB/WorkWithMySQL.php';
require 'DB/WorkWithOracle.php';
require 'DB/WorkWithPostgreSQL.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MySQLRecord.php';
require 'DBRecord/OracleRecord.php';
require 'DBRecord/PostgreSQLRecord.php';

require 'DBConnection/DBConnection.php';
require 'DBConnection/MySQLConnection.php';
require 'DBConnection/OracleConnection.php';
require 'DBConnection/PostgreSQLConnection.php';




function test(DB $workWithDB)
{
    $workWithDB->startWorkingDB();
}



test(new WorkWithMySQL);
echo '----------------------' . PHP_EOL;
test(new WorkWithOracle());
echo '----------------------' . PHP_EOL;
test(new WorkWithPostgreSQL());