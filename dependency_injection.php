<?php

class EmailNotifier
{
    /**
     * Send an email notification
     */
    public function notify()
    {
        echo 'Sending payment notification via email' . PHP_EOL;
    }
}

class Billing
{
    protected $notifier;

    public function __construct()
    {
        // HardCoded Notification Implementation inside the class
        $this->notifier = new EmailNotifier;
    }

    public function pay()
    {
        // Process the bill payment
        // ......
        $this->notifier->notify();
    }
}

// We now pass the implementation via the constructor.
class Billing 
{

    protected $notifier;

    public function __construct(EmailNotifier $notifier)
    {
        $this->notifier = $notifier;
    }
    
    public function pay()
    {
        // Process the bill payment
        $this->notifier->notify();
    }

}

# Billing depends on the EmailNotifier
$notifier = new EmailNotifier();

# Injecting the Dependecies for Billing
$biller = new Billing($notifier);
$biller->pay();