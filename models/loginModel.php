<?php

include_once 'models/loginModel.php';
include ('DAOs/DAO.php');

class loginModel {


    public function getLogin()
    {
        if (isset($_POST['login-submit']))
        {
            require 'DAOs/DAO.php';

            $DAO = DAO::getInstance();

            $personemail = $_POST['personemail'];
            $custpassword = $_POST['password'];


            if (empty($personemail)||empty($custpassword)) {
                header("Location: ../index.php?error=emptyFields");
                return 'invalid';

                exit();
            }
            else {

                $reslt = $DAO->loginSQL($personemail,$custpassword);
                header("Location: ../index.php?error=success");
                return 'login';

            }

        }
        else {
            return 'invalid';

        }



    }

}