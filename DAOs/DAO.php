<?php

class DAO
{

    private $db;

    function openDB()
    {
        $this->db = new
        PDO ('mysql:host=localhost;dbname=userid;charset=utf8',
        'userid',
        'password');
    }

    function runQuery()
    {

    }
}
