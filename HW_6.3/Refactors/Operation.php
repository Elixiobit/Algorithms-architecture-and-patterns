<?php


abstract class Operation
{
    public abstract function getOperation(): String;
    public abstract function operation(string $filename);
}