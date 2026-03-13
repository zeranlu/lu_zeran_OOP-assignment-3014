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

// HIERARCHY EXAMPLES:

// Scream Variables
// defining variables at the level 1 (HorrorMovies.php)
$slasher = new Filmography\Slasher();
$slasher->title = 'Scream';
$slasher->director = 'Wes Craven';
$slasher->franchise = 'Scream Franchise';
$slasher->installments = '7';
$slasher->villain = 'Ghostface';
$slasher->reason = 'this is an classic serires with an iconic killer that marries comedy and horror.';
$slasher->recommendation = 'Happy Death Day';

// ECHO EXAMPLE:

// echo

//     // functions exists in HorroMovies.php
//     $slasher->getDescription()
//     .$slasher->getVillain()

//     // function exists under the PersonalFavourite.php trait file
//     .$slasher->getRating()

//     // functions exist in the Slasher.php (genre) class
//     .$slasher->getIconDescription()
//     .$slasher->getKillerWarning();



// REC. Variables
$rec = new Filmography\REC();
$rec->title = 'REC.';
$rec->director = 'Jaume Balagueró';
$rec->franchise = 'REC. franchise';
$rec->installments = '4';
$rec->reason = 'this movie combines multiple genres/subgenres of horror movies into one unexpectedly awesome narrative.';
$rec->recommendation = 'Gonjiam: Haunted Asylum';
$rec->perspective = 'First person perspective';
$rec->footageMedium = 'lost and recovered news recordings';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horror Movie Catalogue</title>
</head>
<body>
    <header>
        <h1>Check out all these horror movies!</h1>
    </header>

    <main>
        <div id="scream-con">
            <h2>Scream</h2>

            <h3>These are methods of HorrorMovies.php</h3>
            <p>
                <?php echo $slasher->getDescription();?>
            </p>

            <p>
                <?php echo $slasher->getVillain();?>
            </p>

            <h3>These are methods of my trait PersonalFavourite.php</h3>
            <p>
                <?php echo $slasher->getRating();?>
            </p>

            <p>
                <?php echo $slasher->getReason();?>
            </p>

            <h3>These are methods of my subclass Slasher.php</h3>
            <p>
                <?php echo $slasher->getIconDescription();?>
            </p>

            <p>
                <?php echo $slasher->getKillerWarning();?>
            </p>
        </div>

        <div id="rec-con">
            <h2>REC.</h2>

            <h3>These are methods of HorrorMovies.php</h3>
            <p>
                <?php echo $rec->getDescription();?>
            </p>

            <h3>These are methods of my trait PersonalFavourite.php</h3>

            <p>
                <?php echo $rec->getReason();?>
            </p>

            <h3>These are methods of my trait other trait: FoundFootage.php</h3>
            <p>
                <?php echo $rec->getPointOfInterest();?>
            </p>

            <h3>These are methods of my subclass Zombie.php</h3>
            <p>
                <?php echo $rec->getHistory();?>
            </p>

            <p>
                <?php echo $rec->getZombieWarning();?>
            </p>
        </div>
    </main>
</body>
</html>