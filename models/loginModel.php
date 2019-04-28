<?php

include_once 'models/loginModel.php';


class loginModel {
    public $email;
    public $password;

    public function getLogin()
    {
        if (isset($_POST['login-submit']))
        {
            require 'DAOs/customerDAO.php';

            $DAO = new customerDAO();

            $personemail = $_POST['personemail'];
            $custpassword = $_POST['custpassword'];


            if (empty($personemail)||empty($custpassword)) {
                header("Location: ../index.php?error=emptyFields");
                exit();
            }
            else {
                $loginQuery = $DAO->getTableData("*","");
            }

        }
        else {
            header("Location: index.php");
            exit();
        }



    }

}