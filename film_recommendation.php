<?php
declare(strict_types=1);
require ('movies.php');

$age= readline("\n");

    if (is_numeric($age) && (int)$age>=0) {
        foreach ($movies as $movie) {
            if ($movie['age restriction'] <= age) {
                echo $movie['title'];
                echo "\n";

            }
        }
    }
        else
        {
            echo 'неверный возраст';
        }


