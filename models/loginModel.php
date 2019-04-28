<?php

include_once 'models/loginModel.php';


class loginModel {


    public function getLogin()
    {
        if (isset($_POST['login-submit']))
        {
            require 'DAOs/customerDAO.php';

            $DAO = new DAO();

            $personemail = $_POST['personemail'];
            $custpassword = $_POST['password'];

            echo $personemail;


            if (empty($personemail)||empty($custpassword)) {
                header("Location: ../index.php?error=emptyFields");
                exit();
            }
            else {
                $DAO->loginSQL($personemail,$custpassword);
            }

        }
        else {

        }



    }

}