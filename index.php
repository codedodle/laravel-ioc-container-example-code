<?php

require_once __dir__ . '/vendor/autoload.php';
# High level implementation requirements
require_once 'NotificationInterface.php';

# Low level implementations
require_once 'SlackNotifier.php';
require_once 'EmailNotifier.php';

# The consumer of the implementation
require_once 'Billing.php';

use LaravelContainer\SlackNotifier;
use LaravelContainer\EmailNotifier;

# Create a new Container instance
$container = new \Illuminate\Container\Container();

# Bind the Low Level implementation to resolve when the NotificationInterface is required
$container->bind('LaravelContainer\NotificationInterface', function () {
  return new EmailNotifier();
});

# Resolve the dependencies for Billing
$bill = $container->make('LaravelContainer\Billing');
$bill->pay(); // .... Notifying via email

// Later if we need to swap the implementation, just swap it in the Container
$container->bind('LaravelContainer\NotificationInterface', function () {
  return new SlackNotifier();
});

# Resolve the dependencies for Billing
$bill = $container->make('LaravelContainer\Billing');
$bill->pay(); // .... Notifying via slack