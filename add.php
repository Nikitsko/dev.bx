<?php
/** @var array $page_config */
/** @var array $genres */
/** @var array $movies */

declare(strict_types = 1);
require_once "./config.php";
require_once "./lib/template-functions.php";
require_once "./lib/movies.php";


$page = renderTemplate("../resources/pages/add.php", [

]);

renderLayout($page, [
	'config' => $page_config,
	'genres'=> $genres
]);