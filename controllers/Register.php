<?php

include_once 'models/registerModel.php';
include 'DAOs/personDAO.php';
include 'DAOs/customerDAO.php';

class Register
{
    private $registerModel;

    public function __construct()
    {
        $this->registerModel = new registerModel();
    }

    public function redirect($location) {
        header ('Location: '.$location);
    }



    public function register()
    {



        if (isset($_POST['register-submit'])) {

            $email = $_POST['personemail'];
            $name =  $_POST['personname'];
            $password = $_POST['custpassword'];
            $confirmPassword = $_POST['custpasswordcheck'];
            $number = $_POST['personphone'];

            if (empty($email) || empty($name) || empty($password) || empty($number) || empty($confirmPassword)) {
                header("Location: ./views/register.php?error=emptyfields");
                exit();
            }
//check valid name
            else if (!preg_match("/^[a-zA-Z0-9]*$/ ", $name)) {
                header ("Location: ./views/register.php?error=invalidName");
                exit();
            }
//check valid email
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header ("Location: ./views/register.php?error=invalidEmail");
                exit();
            }

            else if ($password !== $confirmPassword) {
                header ("Location: ./views/register.php?error=passwordCheckFailed");
                exit();
            }

            else {
                $customerDAO = new customerDAO();
                $personDAO = new personDAO();

                $customerDAO->createCustomer($password, "150");
                $personDAO->createPerson($name,$number,$email);

            }
        }


    }
}
