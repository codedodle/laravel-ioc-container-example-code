<?php

namespace LaravelContainer;

require_once 'NotificationInterface.php';

use LaravelContainer\NotificationInterface;

class Billing
{
    protected $notifier;

    public function __construct(NotificationInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function pay()
    {
        // Process payment
        echo 'Processing payment' . PHP_EOL;

        $this->notifier->notify();
    }

}