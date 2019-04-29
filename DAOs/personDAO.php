<?php

require_once ('DAOs/DAO.php');

class personDAO extends DAO
{

    protected $tableName = "fss_person";

    public function getPeople()
    {
        $reslt = $this->getAllTableData();
        return $reslt;


    }

    public function getPersonID($field)
    {
        $reslt = $this->db->query("SELECT custid FROM fss_customer fss_person WHERE personname=={$field}");
        return $reslt;
    }


    public function createPerson($db,$name,$number, $email) {
        $db->exec("INSERT INTO fss_person (personid, personname, personphone, personemail) VALUES (160,$name,$number,$email)");


    }

}

