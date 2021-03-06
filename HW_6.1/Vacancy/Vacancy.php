<?php


class Vacancy
{

    private $nameVacancy;


    public function __construct($nameVacancy)
    {
        $this->nameVacancy = $nameVacancy;
        HH::getInstance()->setVacancy($this);
    }


    public function getNameVacancy()
    {
        return $this->nameVacancy;
    }


}