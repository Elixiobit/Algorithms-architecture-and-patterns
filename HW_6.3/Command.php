<?php


abstract class Command
{
    public abstract function execute();

    public abstract function unExecute();

    public abstract function logging();
}