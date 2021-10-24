<?php
declare(strict_types=1);
require "../movies.php";
 $moviesarray=include $movies.php;
$age= readline("");
    if (is_numeric($age)==true && (int)$age<100 && (int)$age>0) {
        foreach (array($moviesarray)as $movie) {
            if ($moviesarray['age restriction'] < age or $moviesarray['age restriction'] = $age) {
                echo $moviesarray['title'];
                echo "</br>";
            }
        }
    }
        else
        {
            echo 'неверный возраст';
        }


