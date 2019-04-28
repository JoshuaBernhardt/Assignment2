<?php

require_once ('DAOs/DAO.php');

class customerDAO extends DAO
{
    protected $tableName = "fss_Customer";

    public function pastPurchases($name)
    {
        echo "Customer's Past Purchases";
        $result = $this->getTableData("filmtitle, price","f.filmid","a.personname=\"Iola Vance\" AND a.personid=c.custid AND c.custid = op.custid AND op.payid = fp.payid AND fp.filmid");

        return $result;


    }


}