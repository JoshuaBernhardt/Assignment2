<?php



require "header.php";

include("controllers/Films.php");


$filmController = new Films();

$filmController->getFilms();

require "footer.php";
