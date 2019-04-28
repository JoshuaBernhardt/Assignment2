<?php

require_once ('DAOs/DAO.php');

class onlineDAO extends DAO
{

    protected $tableName = "fss_onlinepayment";

    public function getAllOnlinePayments()
    {
        $reslt = $this->getAllTableData();
        return $reslt;


    }



}
