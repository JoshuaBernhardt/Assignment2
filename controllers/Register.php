<?php

include_once 'models/registerModel.php';

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

        $reslt = $this->registerModel->getRegister();

        if ($reslt=='register')
        {
            include 'views/Account.php';
        }

        else
        {
            include 'views/register.php';
        }


        /*$email = '';
        $name = '';
        $password = '';
        $number = '';


        if (isset($_POST['submit']))
        {
            $email = isset($_POST['personemail']) ?  $_POST['personemail'] :NULL;
            $name = isset($_POST['personname']) ?  $_POST['personname'] :NULL;
            $password = isset($_POST['custpassword']) ?  $_POST['custpassword'] :NULL;
            $number = isset($_POST['personphone']) ?  $_POST['personphone'] :NULL;

            $this->registerModel->getRegister($email,$name,$password,$number);
            $this->redirect('index.php');
            echo 'Register Successful';

        }

        include 'views/register.php';*/

    }
}
