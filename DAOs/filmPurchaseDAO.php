<?php

require_once ('DAOs/DAO.php');

class filmPurchaseDAO extends DAO
{

    protected $tableName = "fss_filmpurchase";

    public function getFilmPurchases()
    {
        $reslt = $this->getAllTableData();
        return $reslt;
    }


    public function getFilmPurchase($field)
    {
        $reslt = $this->getTableData($field,'payid');
        return $reslt;
    }

}
