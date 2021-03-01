<?php


class Facebook implements INotifications
{
    private $facebook;

    public function __construct($facebook = null)
    {
        $this->facebook = $facebook;
    }

    public function sendNotifications()
    {
        echo 'Email' . PHP_EOL;
    }
}