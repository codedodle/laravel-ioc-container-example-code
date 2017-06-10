<?php

interface Notification 
{
		public function notify();
}

class Billing
{
		protected $notifier;

		public function __construct(Notification $notifier)
		{
				$this->notifier = $notifier;
		}

		public function pay()
		{
				// Process bill payment

				$this->notifier->notify();
		}
}

class SMSNotifier implements Notification
{
 
		public function notify()
		{
	    	echo 'Sending payment notificatio via SMS' . PHP_EOL;
		}
 
}
 
class EmailNotifier implements Notification
{
 
		public function notify()
		{
	    	echo 'Sending payment notificatio via Email' . PHP_EOL;
		}
 
}

# Passing the implementation as a dependency
# SMS Notifier
$billOne = new Billing(new SMSNotifier);
$billOne->pay();
# Email Notifier
$billTwo = new Billing(new EmailNotifier);
$billTwo->pay();
