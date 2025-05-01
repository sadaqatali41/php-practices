<?php

// SOLID is a set of five design principles that developers use when creating object-oriented software.

// 1. Single Responsibility Principle (SRP) ==> A class should have only one reason to change, which means every class should have a single responsibility or single job or single purpose.
// 2. Open-Closed Principle (OCP)           ==> Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification. (should be able to extends class behavior, without modifying it.) 
// 3. Liskov Substitution Principle (LSP)   ==> Derived or child classes must be substitutable for their base or parent classes. (ex. rectangle is parent class and square is child class).
// 4. Interface Segregation Principle (ISP) ==> do not force any client to implement an interface which is irrelevant to them.
// 5. Dependency Inversion Principle (DIP)  ==> High-level modules should not depend on low-level modules. Both should depend on abstractions.

// eg

// Payment Method Interface (OCP, DIP)
interface PaymentMethod {
    public function pay($amount);
}

// Credit Card Payment (SRP)
class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        // Logic for credit card payment
        echo "Paid $amount using Credit Card.\n";
    }
}

// PayPal Payment (SRP)
class PayPalPayment implements PaymentMethod {
    public function pay($amount) {
        // Logic for PayPal payment
        echo "Paid $amount using PayPal.\n";
    }
}

// Logger Interface (DIP)
interface Loggers {
    public function log($message);
}

// File Logger (SRP)
class FileLogger implements Loggers {
    public function log($message) {
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
        echo "Logged to file: $message\n";
    }
}

// Payment Processor (SRP, DIP)
class PaymentProcessor {
    private $paymentMethod;
    private $logger;

    public function __construct(PaymentMethod $paymentMethod, Loggers $logger) {
        $this->paymentMethod = $paymentMethod;
        $this->logger = $logger;
    }

    public function processPayment($amount) {
        $this->paymentMethod->pay($amount);
        $this->logger->log("Processed payment of $amount.");
    }
}

// Usage
$creditCardPayment = new CreditCardPayment();
$fileLogger = new FileLogger();
$paymentProcessor = new PaymentProcessor($creditCardPayment, $fileLogger);
$paymentProcessor->processPayment(100); 
// Output: Paid 100 using Credit Card. Logged to file: Processed payment of 100.

$payPalPayment = new PayPalPayment();
$paymentProcessor2 = new PaymentProcessor($payPalPayment, $fileLogger);
$paymentProcessor2->processPayment(200);
// Output: Paid 200 using PayPal. Logged to file: Processed payment of 200.