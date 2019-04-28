<?php


class Films
{
    private $model;

    public function __construct()
    {
        $this->model = new Film();
    }

    public function getFilms()
    {

        include 'views/Films.php';


    }
}
