<?php

// jobs and queues are used to handle time-consuming tasks or processes in the background, allowing your application to continue running without waiting for the task to complete.
// A job is a single task that needs to be executed.
// A queue is a collection of jobs that are waiting to be executed.
// A queue is a container that holds jobs waiting to be processed. Laravel supports several queue drivers, including:

/*
1. Sync (default): Jobs are executed immediately, without queuing.
2. Database: Jobs are stored in a database table.
3. Redis: Jobs are stored in a Redis database.
4. Amazon SQS: Jobs are stored in an Amazon SQS queue.
5. Beanstalkd: Jobs are stored in a Beanstalkd queue.

make changes in .env file => env(QUEUE_CONNECTION, 'sync')

php artisan queue:table
php artisan migrate

php artisan make:job ProcessTask

php artisan queue:work (need to start the worker when you make any changes in codebase)

php artisan queue:listen (no need to restart the worker when you make any changes in codebase)
*/