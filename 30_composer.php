<?php

// ! Composer is a dependency manager for PHP, allowing you to manage libraries and packages in your projects.
// ! It simplifies the process of installing, updating, and autoloading dependencies.

// ! composer update: 
// updates the dependencies using composer.json and also modifies the composer.lock 
// file to reflect the latest versions.

// ! composer install:
// installs the dependencies using the composer.lock file.
// If the composer.lock file is not present, it will install the dependencies listed in composer.json 
// and create a new composer.lock file.

// ! For production/deployment: always use composer install.
// ! For development: use composer update to get the latest versions of dependencies.

// ! composer dump-autoload:
// Regenerates the list of all classes that need to be included in the autoloading process.
// It does not update the dependencies or modify the composer.lock file.
// This is useful when you add new classes or change the structure of your project.
// It ensures that the autoloader is aware of all classes and their locations.
// It is a good practice to run this command after making changes to your classes or namespaces.