<?php

require_once ('DAOs/DAO.php');

class filmDAO extends DAO
{

    protected $tableName = "fss_film";


    public function getFilms()
    {
        $reslt = $this->getAllTableData();
        return $reslt;
    }


    public function getFilm($film)
    {
        $reslt = $this->getTableData($film,'filmtitle');
        return $reslt;
    }

}

