<?php

spl_autoload_register(function ($class) {
    $class = str_replace('Filmography\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);

    if (file_exists($filepath)) {
        require_once $filepath;
    }
});

// TESTING AUTOLOAD

// $slasher = new Filmography\Slasher();
// $slasher->title = 'Scream';
// echo $slasher->title;

// $alien = new Filmography\Extraterrestrial();
// $alien->title = 'Alien';
// $alien->director = 'Ridley Scott';
// echo $alien->title . ' directed by ' . $alien->director;

// HIERARCHY EXAMPLES:

// defining variables at the level 1 (HorrorMovies.php)
$slasher = new Filmography\Slasher();
$slasher->title = 'Scream';
$slasher->director = 'Wes Craven';
$slasher->franchise = 'Scream Franchise';
$slasher->installments = '7';
$slasher->villain = 'Ghostface';

echo
    // functions exists in HorroMovies.php
    $slasher->getDescription()
    .$slasher->getVillain()
    // function exists under the PersonalFavourite.php trait file
    .$slasher->getRating()
    // functions exist in the Slasher.php (genre) class
    .$slasher->getIconDescription()
    .$slasher->getKillerWarning();

