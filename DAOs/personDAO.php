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



}

