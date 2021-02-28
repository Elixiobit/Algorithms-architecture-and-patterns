<?php

require 'TSingleton.php';

abstract class DBConnection
{
    use TSingleton;

    abstract protected function getConnection();

}