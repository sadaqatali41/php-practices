<?php

//  Use Case: Ideal when creating objects that are part of a family of related objects. eg: email and SMS notification.

interface Notification {

    public function send($message);
}

class EmailNotification implements Notification {
    public function send($message) {
        echo "Sending Email: $message\n";
    }
}

class SMSNotification implements Notification {
    public function send($message) {
        echo "Sending SMS: $message\n";
    }
}

// Create a factory
class NotificationFactory {
    public static function create($type) {
        switch ($type) {
            case 'email': return new EmailNotification();
            case 'sms': return new SMSNotification();
            default: throw new Exception("Invalid notification type");
        }
    }
}

// Usage
$notification = NotificationFactory::create('email');
$notification->send("Your order has been shipped!"); 