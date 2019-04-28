<?php

require_once ('DAOs/DAO.php');

class customerDAO extends DAO
{

    protected $tableName = "fss_customer";

    public function getCustomerID($custid)
    {
        $reslt = $this->getTableData($custid, 'custid');
        return $reslt;


    }


    public function getPassword($personid)
    {

    }

    public function getCustomers()
    {
        $reslt = $this->getAllTableData();
        return $reslt;


    }


    public function updateAddress()
    {

    }

    public function updateCustomerPassword()
    {

    }

}