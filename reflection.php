<?php

require_once 'Billing.php';
require_once 'SlackNotifier.php';

$reflection = new ReflectionClass('LaravelContainer\Billing');

$reflectionMethod = $reflection->getMethods();

$construct = $reflectionMethod[0];

echo 'Billing __construct method: ' . PHP_EOL;
# The __construct method
print_r($construct);

echo 'Parameters of the Billing __construct method: ' . PHP_EOL;
# The parameter of the construct method
print_r($construct->getParameters());

echo 'Class of the Type Hint for the paramter in construct: ' . PHP_EOL;
# The type of paramter passed to constructor
print_r($construct->getParameters()[0]->getClass());