<?php


class Twitter implements INotifications
{

    protected $twitter;

    public function __construct($twitter = null)
    {
        $this->twitter = $twitter;
    }


    public function sendNotifications()
    {
        echo 'Email' . PHP_EOL;
    }
}