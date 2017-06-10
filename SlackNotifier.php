<?php

namespace LaravelContainer;

require_once 'NotificationInterface.php';

use LaravelContainer\NotificationInterface;

class SlackNotifier implements NotificationInterface
{

  public function notify()
  {
    echo 'Notifying via slack' . PHP_EOL;
  }

}