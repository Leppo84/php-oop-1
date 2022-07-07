<!-- public function __construct(string $title, string $lang,string $year) -->

<?php

$allMovies = array ();

include __DIR__ . '/movie.php';



$pulpFiction = new movie('Pulp Fiction', 'Eng', 1994);

var_dump($pulpFiction);

$jackieBrown = new movie('Jackie Brown', 'Eng', 1997);

var_dump($jackieBrown);

$reservoirDogs = new movie('Reservoir Dogs', 'Eng', 1992);

var_dump($reservoirDogs);

$allMovies[] = ($pulpFiction);
$allMovies[] = ($jackieBrown);
$allMovies[] = ($reservoirDogs);

// $allMovies[] = ($reservoirDogs);

var_dump($allMovies);

$jackieBrown->listYear(1997);