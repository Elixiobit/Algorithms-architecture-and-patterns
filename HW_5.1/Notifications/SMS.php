<?php


class SMS extends NotificationsDecorator
{

    public function sendNotifications()
    {
        echo 'SMS' . PHP_EOL;
        $this->sendNotifications->sendNotifications();
    }
}