<?php

// ? Laravel provides two primary ways of authorizing actions: gates and policies. Think of gates and policies like routes and controllers. 
// ? Gates are used to authorize actions at the application level, while policies are used to authorize actions at the model level.

// ? Gates always receive a user instance as their first argument and may optionally receive additional arguments such as a relevant Eloquent model.

// ? Gates are simply closures that determine if a user is authorized to perform a given action. Typically, gates are defined within the boot method of the App\Providers\AuthServiceProvider class using the Gate facade. Gates provides two methods to authorised the user `allows` and `denies`