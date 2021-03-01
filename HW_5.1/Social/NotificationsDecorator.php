<?php


abstract class NotificationsDecorator implements INotifications
{
    protected INotifications $sendNotifications;

    public function __construct(INotifications $sendNotifications)
    {
        $this->sendNotifications = $sendNotifications;
    }

}