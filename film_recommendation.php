<?php
declare(strict_types=1);
require ('movies.php');
$i=1;

$age=readline("\n");

    if (is_numeric($age) && (int)$age>=0) {
        foreach ($movies as $movie) {
            if ($movie['age_restriction'] <= $age) {
                echo "$i.";
                echo $movie['title'];
                echo $movie['release_year'];
                echo $movie['age_restriction'];
                echo "Rating-";
                echo $movie['rating'];
                echo "\n";
                $i++;

            }
        }
    }
        else
        {
            echo 'неверный возраст';
        }


