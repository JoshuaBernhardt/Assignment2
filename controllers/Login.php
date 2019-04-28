<?php

include_once ("models/loginModel.php");

class Login
{

    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function redirect($location) {
        header ('Location: '.$location);
    }
    public function login()
    {
        $reslt = $this->loginModel->getLogin();

        if ($reslt=='login')
        {
            include 'views/AfterLogin.php';
        }
        else
        {
            include 'views/login.php';
        }




    }

}
