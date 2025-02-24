<?php

// Custom error handler function
function customErrorHandler(int $errno, string $errstr, string $errfile, int $errline)
{
    // Convert error to ErrorException
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

// Set the custom error handler
set_error_handler("customErrorHandler");

try {
    // Code that may produce errors
    echo $undefinedVariable; // This will cause a notice
    include 'nonexistentfile.php'; // This will cause a warning
} catch (ErrorException $e) {
    // Handle the exception
    echo "Caught exception: " . $e->getMessage() . "\n";
    echo "In file: " . $e->getFile() . "\n";
    echo "On line: " . $e->getLine() . "\n";
}

// Restore the original error handler
restore_error_handler();