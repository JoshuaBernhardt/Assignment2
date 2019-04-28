<?php



class registerModel {
    public $email;
    public $name;
    public $password;
    public $number;


    public function getRegister()
    {
        if (isset($_POST['submit']))
        {
            return 'register';
        }


    }

}
