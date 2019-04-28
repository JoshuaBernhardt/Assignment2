<?php



require "header.php";

include("controllers/Register.php");


$registerController = new Register();

$registerController->register();

require "footer.php";

