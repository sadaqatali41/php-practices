<?php

// ! 1. User Model

// class User {
//     public function posts() {
//         return $this->hasMany(Post::class, 'foreign_key', 'local_key');
//     }
// }

// ! 2. Post Model

// class Post {
//     public function user() {
//         return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
//     }
// }