<?php
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Error: [$errno] $errstr - $errfile:$errline\n";
    error_log("Error: [$errno] $errstr - $errfile:$errline", 3, "/var/log/php_errors.log");
    return true;
}

function customExceptionHandler($exception)
{
    echo "Exception: " . $exception->getMessage() . "\n";
    error_log("Exception: " . $exception->getMessage(), 3, "/var/log/php_exceptions.log");
}

set_error_handler("customErrorHandler");
set_exception_handler("customExceptionHandler");

// Trigger an error
echo $undefinedVariable;

// Trigger an exception
throw new Exception("This is a test exception");