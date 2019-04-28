<?php



require "header.php";

include("controllers/Login.php");


$loginController = new Login();

$loginController->login();

require "footer.php";
