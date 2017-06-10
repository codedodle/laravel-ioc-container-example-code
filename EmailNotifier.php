<?php

namespace LaravelContainer;

require_once 'NotificationInterface.php';

use LaravelContainer\NotificationInterface;

class EmailNotifier implements NotificationInterface
{

    public function notify()
    {
        echo 'Notifying via email' . PHP_EOL;
    }

}