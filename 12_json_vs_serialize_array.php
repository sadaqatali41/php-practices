<?php

// ! In PHP, serializing and unserializing are processes that allow you to convert complex data structures, such as arrays or objects, into a storable or transmittable format, and then convert them back into their original form.

// * Serializing is the process of converting a complex data structure into a string representation. This string can be stored in a database, file, or transmitted over a network. In PHP, you can use the serialize() function to serialize a variable.

// * Unserializing is the process of converting a serialized string back into its original data structure. In PHP, you can use the unserialize() function to unserialize a string.

// todo: consider factors for choosing them :-
// ? 1. Interoperability -> data sharing over different systems or languages (JSON)
// ? 2. Performance -> for frequent caching operation (serialize)
// ? 3. Security -> for security (JSON)

$data = [
    'name' => 'Sadaqat Ali',
    'age' => 28,
    'address' => [
        'city' => 'Malerkotla',
        'country' => 'India',
        'street' => [
            'landmark' => 'Opposite to Bikaner Sweets',
            'road_no' => 'Nabha - malerkotla road'
        ]
    ]
];

$jsonData = json_encode($data);
file_put_contents('cache.json', $jsonData);


$data = [
    'name' => 'Sadaqat Ali',
    'age' => 28,
    'address' => [
        'city' => 'Malerkotla',
        'country' => 'India',
        'street' => [
            'landmark' => 'Opposite to Bikaner Sweets',
            'road_no' => 'Nabha - malerkotla road'
        ]
    ]
];

$serializedData = serialize($data);
file_put_contents('cache.dat', $serializedData);