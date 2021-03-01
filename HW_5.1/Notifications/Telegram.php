<?php


class PostOffice extends NotificationsDecorator
{

    public function sendNotifications()
    {
        echo 'PostOffice' . PHP_EOL;
        $this->sendNotifications->sendNotifications();
    }
}