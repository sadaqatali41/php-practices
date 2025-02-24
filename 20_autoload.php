// ! Autoloading in PHP is a way to automatically load class files when they are needed, rather than requiring all class files at the beginning of the script or manually including them. This is especially useful in large projects with many classes, as it helps to keep the code organized and reduces the number of include or require statements.

// todo : How Autoloading Works
// ? When PHP encounters a class that hasn't been defined yet, it will call the autoloader function, which you define. The autoloader function will then load the necessary class file.

<?php

function customAutoload(string $className) {
    $path = 'class/' . $className . '.php';
    if(is_file($path)) {
        require_once $path;
    }
}

spl_autoload_register('customAutoload');

$foo = new Foo();