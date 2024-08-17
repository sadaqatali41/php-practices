<?php

// ! In PHP, a persistent connection is a database connection that remains open across multiple requests, rather than being closed after each request.

// we can achieve this in `mysqli` extension

$conn = new mysqli('p:localhost', 'user', 'password', 'dbname');

// we can achieve this in `PDO` extension

$dns = "mysql:host=localhost;dbname=test";
$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$pdo = new PDO($dns, 'username', 'password', $options);

// todo: Advantages:

// ? 1. Improved performance: Persistent connections reduce the overhead of establishing a new connection for each request.
// ? 2. Faster execution: Queries execute faster since the connection is already established.
// ? 3. Reduced server load: Fewer connections are created, reducing the load on the database server.

// todo: Disadvantages
// ? 1. Resource leakage: If not properly managed, persistent connections can lead to resource leaks, causing performance issues.
// ? 2. Connection limits: Exceeding the maximum allowed connections can lead to errors and performance issues.
// ? 3. Session-specific data: Persistent connections can retain session-specific data, causing issues if not properly reset.
// ? 4. Debugging challenges: Persistent connections can make debugging more complex due to the shared connection state.
// ? 5. Security risks: If not properly secured, persistent connections can increase the risk of SQL injection attacks.
// ? 6. Incompatibility with some databases: Persistent connections may not be supported by all databases or may require special configuration.
