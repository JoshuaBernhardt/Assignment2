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

    public function createCustomer($db, $custpassword,$custid) {

        $sql = "INSERT INTO fss_customer (custid,custregdate,custendreg,custpassword) VALUES (?,?,?,?)";

        $stmt = $this->db->prepare($sql);

        $db->exec([$custid,"2019-04-29","0000-00-00", $custpassword]);


    }


    public function updateAddress()
    {

    }

    public function updateCustomerPassword()
    {

    }

}