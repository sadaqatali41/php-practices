<?php
// ! laravel request lifecycle

// 1. public/index.php (composer autoloaded and instance is created from bootstrap/app.php)
// 2. HTTP Kernel or Console Kernel (loads different types of middlewares)
// 3. Service Provider (laravel core functionality is loaded)
// 4. Routes (middleware, controller then view)