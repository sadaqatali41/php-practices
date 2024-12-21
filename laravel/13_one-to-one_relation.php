<?php

// ! 1. User Model

// class User {
//     public function phone() {
//         return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
//     }
// }

// ! 2. Phone Model

// class Phone {
//     public function user() {
//         return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
//     }
// }